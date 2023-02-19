<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255' , 'alpha_dash', Rule::unique('users')->ignore($user)],
            'old_password' => ['required'],
            'avatar' => ['dimensions:min_width=100,min_height=100','file','max:4096'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validate();

        // ddd(Hash::check($input['old_password'] , $user->password));
        if( Hash::check($input['old_password'] , $user->password )) {

            if ($input['email'] !== $user->email &&
                $user instanceof MustVerifyEmail) {

                    $this->updateVerifiedUser($user, $input);

                } else {
                    $user->forceFill([
                        'name' => $input['name'],
                        'avatar' => "app/".$input['avatar'] ?  "app/".$input['avatar']->store('avatars') : $user->avatar(),
                        'uname' => $input['uname'],
                        'email' => $input['email'],
                    ])->save();

                }

        } else {
            return back()->withErrors(['old_password'=>'verify your password']);

        }
        return redirect($user->path('edit'))->with(['profile-update'=>'Profile updated successfully !']);

    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'avatar' => "app/".$input['avatar'] ?  "app/".$input['avatar']->store('avatars') : $user->avatar(),
            'uname' => $input['uname'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        // $user->sendEmailVerificationNotification();
    }

}
