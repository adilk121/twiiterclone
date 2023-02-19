<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FollowNotififcation extends Notification implements ShouldQueue
{
    use Queueable;


    public $follower ;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $follower)
    {
        $this->follower = $follower ;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url =  url("/users/".$this->follower->uname) ;
        return (new MailMessage)
                    ->line($this->follower->name)
                    ->line('Followed you !')
                    ->action('Take a look at his feed', $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'follower' => $this->follower->name ,
            'followerid' => $this->follower->id ,
            // 'created' => $this->created_at->diffForHumans() ,
            // 'read' => $this->created_at->diffForHumans() ,
            'link' => '/users/'.$this->follower->uname

        ];
    }
}
