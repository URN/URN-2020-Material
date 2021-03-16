bhbhbhbh
<div class="listen-live-top">
        <a class="nav-link btn btn-sm btn-primary" onclick="togglePlay()">
          <i class="fas fa-fw fa-play" id="livebutton"></i>
          <span class="listen-live">Listen Live!</span>
        </a>
      </div>      <!-- TODO make a popup radio player like university radio york or insanity radio-->
        <audio id="urnlive" src="https://live.urn1350.net/listen" preload="none"  ></audio>
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

  </div>

