(function($) {
    "use strict";

    var $listenNow = $("#listen-now");
    var $song = $listenNow.find(".current-track");
    var $progress = $listenNow.find(".progress-bar");

    var $show_prelude = $listenNow.find(".show-title-prelude");
    var $show_name = $listenNow.find(".show-title-name");
    var $show_time = $listenNow.find(".show-title-time");
    var $show_image = $listenNow.find(".show-image");

    var currentSong = null;
    var loading = false;

    var $messageForm = $("#message-the-studio");
    $messageForm.submit(function(e) {
        var message = $messageForm.find("textarea[name=studio-message]").val().trim();

        if (message === "") {
            return false;
        }

        $messageForm.find("button").prop("disabled", true).text("Sending...");
        $messageForm.find("textarea").val("");

        var request = $.ajax({
            url: "/api/send_message",
            type: "post",
            dataType: "json",
            data: { message: message }
        });

        request.always(function() {
            $messageForm.find("button").prop("disabled", false).text("Send");
        });

        request.done(function(data) {
            var message = data.status === "success" ? "Thanks for the message!" : "Sorry, your message couldn't be delivered!";
            $messageForm.find(".message").text(message).show().delay(2000).fadeOut();
        });

        e.preventDefault();
        return false;
    });

    var dayNames = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];

    (function updateCurrentShow() {
        var request = $.ajax({
            url: "/api/schedule/week",
            type: "get",
            dataType: "json"
        });

        request.error(function(error) {
            console.log(error);
        });

        request.done(function(todaysSchedule) {
            var found_live = false;
            $.each(todaysSchedule[dayNames[new Date().getDay()]], function(j, slotData) {
                if (slotData.live) {
                    $show_prelude.text("URN Presents");
                    $show_name.text(slotData.name);
                    $show_time.text("From " + slotData.from + "-" + slotData.to);

                    if (slotData.image !== "") {
                        $show_image.css("background-image", "url(" + slotData.image + ")");
                        $show_image.css("display", "block");
                        $show_image.css("background-size", "cover");
                    }
                    found_live = true;
                }
            });

            if (!found_live) {
                $show_prelude.text("URN presents");
                $show_name.text("URN Live");
                $show_time.text("24/7");
            }
        });
    })();

    (function refreshNowPlaying() {
        var songString;
        var progress = getSongProgressPercentage();

        // Make the very first request fast and then subsequent requests a lot more
        // infrequently
        var timeout = currentSong === null ? 500 : 5000;
        if (currentSong !== null && !loading && progress <= 100) {
            songString = currentSong.title + " - " + currentSong.artist;
        } else {
            songString = "URN Live";
        }

        $song.text(songString);


        setTimeout(function() {
            if (progress >= 100) {
                updateCurrentSong(function() {
                    refreshNowPlaying();
                });
            } else {
                refreshNowPlaying();
            }
        }, timeout);
    })();

    function updateCurrentSong(callback) {
        var request = $.ajax({
            url: "/api/current_song",
            type: "get",
            dataType: "json"
        });

        request.done(function(newSong) {
            loading = compareSongs(newSong, currentSong);

            newSong.start_time = parseInt(newSong.start_time);
            newSong.duration = parseInt(newSong.duration);
            currentSong = newSong;

            callback();
        });
    }

    function getSongProgressPercentage() {
        if (currentSong === null) {
            return 101;
        }
        var startDateUTC = new Date(currentSong.start_time * 1000);
        var currentDateUTC = new Date();
        var durationSeconds = currentSong.duration / 10000000;

        var progressSeconds = (currentDateUTC.getTime() - startDateUTC.getTime()) / 1000;
        var progressPercentage = (progressSeconds / durationSeconds) * 100;
        return progressPercentage;
    }

    (function redrawProgressBar() {
        var progress = getSongProgressPercentage();
        if (progress > 100) {
            progress = 0;
        }
        $progress.css({ width: progress + "%" });
        setTimeout(function() {
            redrawProgressBar();
        }, 500);
    })();

    function compareSongs(song1, song2) {
        if (song1 === null || song2 === null) {
            return false;
        }

        var equals = (song1.title === song2.title) &&
            (song1.artist === song2.artist);

        return equals;
    }

    $(".play").click(function(e) {
        window.open("/stream", "radioplayer", "height=710,width=380");
        e.preventDefault();
    });

    $(".listen").click(function(e) {
        if ($(window).width() < 800) {
            $(".show-container").animate({ height: 'toggle' }, { duration: 0 });
        } else {
            $(".show-container").animate({ height: 'toggle' });
        }

        var text = $(".listen").text();
        $(".listen").text(text == "Expand" ? "Shrink" : "Expand");

        e.preventDefault();
    });

})(jQuery);