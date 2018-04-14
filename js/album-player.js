$(document).ready(function () {

    play();
});

function play() {
    var currentsong = 0;
    var isPlaying = !$("#audioPlayer")[0].paused && !$("#audioPlayer")[0].ended && $("#audioPlayer")[0].readyState >
        2;

    if (!isPlaying) {
        $("#audioPlayer")[0].play();
    }

    $("#playlist li a").click(function (e) {
        currentsong = $(this).parent().index();
        console.log(currentsong);

        e.preventDefault();
        for (var i = 0; i < $("#audio-playlist li a").length; i++) {
            $("#audio-playlist ul").empty();
        }

        $("#audioPlayer")[0].src = this;
        if (($("#audio-playlist li a").length < $("#playlist li a").length)) {
            for (var j = 0; j < $("#playlist li a").length; j++) {
                $("#audio-playlist ul").append("<li> <a href='' music> </a> </li>");
                $("#audio-playlist li a")[j].href = $("#playlist li a")[j].href;
            }
        }

        $("#audioPlayer")[0].play();

        var title = $(this).attr("music");

        $("#audio-title").html(title);
    });

    $("#audioPlayer")[0].addEventListener("ended", function () {
        currentsong++;
        if (currentsong == $("#playlist li a").length) {
            currentsong = 0;
        }
        // $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
        $("#audioPlayer")[0].src = $("#playlist li a")[currentsong].href;
        $("#audioPlayer")[0].play();
    });
    console.log(currentsong);

    $("#play").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].play();
    });
    $("#pause").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].pause();
    });
    $("#back").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].pause();
        currentsong--;
        console.log(currentsong);

        if (currentsong < 0) {
            currentsong = $("#audio-playlist li a").length - 1;
            $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
        } else {
            $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
        }
        $("#audioPlayer")[0].play();
        var title = $("#playlist li a:eq(" + currentsong + ")").attr('music');
        $("#audio-title").html(title);

        console.log(title);

    });
    $("#next").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].pause();
        currentsong++;
        console.log(currentsong);

        if (currentsong >= $("#audio-playlist li a").length) {
            currentsong = 0;
            $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
        } else {
            $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;

        }
        $("#audioPlayer")[0].play();
        var title = $("#playlist li a:eq(" + currentsong + ")").attr('music');
        $("#audio-title").html(title);

    });



}
