<?php
    $message_studio_placeholder = 'Send a message into the show...';
    $success_msg = 'Thank you for your message.';
    $failure_msg = 'An error occurred while delivering your message. Please try again later.';
    if(isset($_POST['studio-message'])) {
        $message_studio_placeholder = (message_studio($_POST['studio-message']) ? $success_msg : $failure_msg);
    }
?>

<?php $minimise = is_home() || is_page( 'stream' ) ? '' : 'display: none;' ?>
<?php $minimiseT = is_home() ? 'Shrink' : 'Expand' ?>
<?php $btn = is_page( 'stream' ) ? 'display: none;' : '' ?>
<div id="listen-now">   
    
    <div class="show-container" id="streams" style="<?php echo $minimise; ?>">
        <div class="content ">
            <div class="container">
                <div class="card mx-auto " style="max-width: 840px;" id= "now-playing-full-card">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body " id="now-playing-card-body2">
                                <h5 class="card-title text-center" id="now-playing-upnext-title2">NOW PLAYING</h5>
                               <!-- <h2 class="show-title-prelude">URN presents</h2>-->

                                <h1 class="show-title-name">URN Live</h1>

                                <h3 class="show-title-time">24/7</h3>
                                <button class="right-button"> <a class="presenter-link" href="https://www.facebook.com/people/Kathryn-Embree/100006144706858" target="_blank"> CONTACT PRESENTERS </a> </button>
                                
                                <audio class="ug" controls autoplay>
                                   <source src="https://live.urn1350.net/listen"  class="player" type="audio/mpeg">
                                </audio>  
                            </div>
                        </div>
                        
                    <div class="col-md-4" >

                        <span  alt=""  class="show-image" alt="..." id="presenterIMG">
                            <div class="card-img-overlay">
                                <audio id="urnlive" src="https://live.urn1350.net/listen" preload="none" ></audio>
                                    <script>
                                        var myAudio = document.getElementById("urnlive");
                                        var isPlaying = false;

                                        function togglePlay() {
                                        if (isPlaying) {
                                            myAudio.pause()
                                            $('#livebutton').removeClass('fa-pause');
                                            $('#livebutton').addClass('fa-play');
                                        } else {
                                            myAudio.play();
                                            $('#livebutton').removeClass('fa-play');
                                            $('#livebutton').addClass('fa-pause');
                                        }
                                        };
                                        myAudio.onplaying = function() {
                                        isPlaying = true;
                                        };
                                        myAudio.onpause = function() {
                                        isPlaying = false;
                                        };
                                    </script>
                                    
                <!-- <a class="but" onclick="togglePlay()">
                    <i class="fas fa-fw fa-play  fa-10x" onclick="togglePlay() "id="livebutton2"></i>
                    </a>-->
                                    
                            </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>





        <!--<a href="/stream" title="Listen now!" target="_blank" class="play">Listen Now</a>-->
<br>



        <div class="card mx-auto" id="card-stream">
  
            <div class="card-body">
            <div class="container">

          <div class="col-md-7">
                <h5 class="card-title" id="card-stream-title">MESSAGE <br> THE <br> STUDIO</h5>
                </div>
                
                <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/urnwhite.png" alt=""  class="smol-stream-img" alt="..." id="">
<div class="kill">
                    <form id="message-the-studio" name="message-the-studio" method="post" action="">
                    <span class="message"></span>
                    <textarea  class = "textbox" autocomplete="off" name="studio-message"
                            placeholder="<?php echo $message_studio_placeholder; ?>"
                            aria-label="Text area to message into the studios"></textarea>
                    <button autocomplete="off" class="btn" type="submit" name="submit">Send</button>
                     </form>
                     </div>
                </div>
            </div>
            </div>
        </div>

        <div class="send-message">
          
        </div>
    </div>
</div>

