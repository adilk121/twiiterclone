var Turbolinks = require("turbolinks");
Turbolinks.start();



window.addEventListener('load', function () {
    var e = document.querySelector("#menu-toggler");
    var t = document.querySelector('#tweetBtn');
    var slideBackward = document.querySelectorAll('.slide-backward');
    var slideForward = document.querySelectorAll('.slide-forward');

    var tweetFilesUp = document.querySelector('.files .fa-files') ;
    var tweetFilesCount = document.querySelector('.files .files-count') ;
    var tweetFilesTrash = document.querySelector('.files .fa-trash') ;

    var toggleInputStyle = function () {
        console.log('run') ;
        tweetFilesUp.parentElement.classList.toggle('contain');
        tweetFilesTrash.classList.toggle('hidden');
        tweetFilesCount.classList.toggle('hidden');
     }
    if(e) {
        e.addEventListener("click", function () {
            document.querySelector("#menu").classList.toggle("menu-active");
        });

    }



    if(t) {
        t.addEventListener('click', () => {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            document.querySelector("#tweetInput").focus();

        });
    }

    if(tweetFilesUp && tweetFilesCount) {
        tweetFilesUp.addEventListener('change', ()=>{
                var c = tweetFilesUp.files.length
                tweetFilesCount.textContent = c ;
                toggleInputStyle();

        });
        tweetFilesTrash.addEventListener('click',()=>{
                tweetFilesUp.value = null ;
                toggleInputStyle();


        });

    }



    if ( slideForward  && slideBackward) {

        slideBackward.forEach((e) =>{
            let w = e.parentElement.offsetWidth;
            e.addEventListener('click',()=>{
                e.parentElement.scrollLeft -= w ;
                if(e.parentElement.scrollLeft < e.parentElement.clientWidth){
                    e.classList.add('hidden');
                }
            });

        });



        slideForward.forEach((e)=>{
            let w = e.parentElement.offsetWidth;

            e.addEventListener('click',()=>{
                e.parentElement.scrollLeft += w ;
                if(e.parentElement.scrollLeft > e.parentElement.scrollWidth - e.parentElement.clientWidth ){
                    e.classList.add('hidden');
                }
            });
        });

    }


})
