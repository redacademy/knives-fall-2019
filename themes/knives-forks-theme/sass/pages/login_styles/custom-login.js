(function($){
const loginPath=window.location.origin+'/kf/wp-content/themes/knives-forks-theme/assets/login';

// $('#login').css({
//         transform:'translateX(90%)'
//     });
$('body').append(`<main class="login-content"></main>`);
$('#login').appendTo('.login-content').addClass('login');
$('.login h1>a').addClass('login-logo');

$('.login-content').append(`<section class="login-footer">
                    
                    <ul class="kf-group">
                        <li>
                            <h1>Brought to you By : </h1>
                        </li>
                        <li>
                            <a href="#">
                                Brooke
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Servin So
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Victor Lin
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Ariel Kew-Ladret
                            </a>
                        </li>
                    </ul>
                </section>`);
    
    $('.login-logo').attr({
        alt:'Knives & Fork Home Page'
    });
    $('.login-content').prepend(`<video class="bg-video" id="bg-video" autoplay="false" loop="true">
    //     <source src="${loginPath}/_short-login.mp4" type="video/mp4">
    //     </video>`);

    
    $.ajax({
        url:loginPath+'/short-login.mp4',
        method:'GET',
        error:function(){
            $('.login-content').prepend(`<picture class="bg-video" id="bg-video">
        <img src="${loginPath}/image-bg.jpg" >
        </picture>`);
        },
        // success:function(){
        //     $('.login-content').prepend(`<video class="bg-video" id="bg-video" autoplay="false" loop="true">
        //     <source src="${loginPath}/short-login.mp4" type="video/mp4">
        //     </video>`);
        // }

    });
    if($(document).outerWidth()>900){
        $(document).on('click','.kf-group li h1',function(){
            $('.login-content picture').toggle();
            $('.login-content video').toggle();
        });
    }
    
    
    
    // <source src="./wp-content/themes/knives-forks-theme/assets/login/short-login.mp4" type="video/mp4"></source>
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
// playVideo();

//         function playVideo(){
//             const loginVideo=document.getElementById("bg-video");
            
//             if (loginVideo.play() !== undefined) {
//                 loginVideo.play().then(_ => {
//                     console.log('OFF!!!');
//                 }).catch(error => {
//                   // Show something in the UI that the video is muted
//                   console.log('AUTOPLAY was ON!');
//                 });
//               }
//     }


})(jQuery)