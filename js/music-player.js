var currentsong = 0;
var isPlaying = !$("#audioPlayer")[0].paused && !$("#audioPlayer")[0].ended && $("#audioPlayer")[0].readyState >
    2;

if (!isPlaying) {
    $("#audioPlayer")[0].play();
}
$("a.music").click(function (e) {
    e.preventDefault();
    currentsong = $(this).parent().parent().index();

    for (var i = 0; i < $("#audio-playlist li a").length; i++) {
        $("#audio-playlist ul").empty();
    }

    if (($("#audio-playlist li a").length < $("#playlist tr td a.music").length)) {
        for (var j = 0; j < $("#playlist tr td a.music").length; j++) {
            $("#audio-playlist ul").append("<li> <a href> </a> </li>");
            $("#audio-playlist li a")[j].href = $("#playlist tr td a.music")[j].href;
        }
    }
    $("#audioPlayer")[0].src = this;
    $("#audioPlayer")[0].play();

    var title = $(this).text();
    $("#audio-title").html(title);
});

$("#audioPlayer")[0].addEventListener("ended", function () {
    currentsong++;
    if (currentsong == $("#playlist tr td a.music").length) {
        currentsong = 0;
    }
    $("#audioPlayer")[0].src = $("#playlist tr td a.music")[currentsong].href;
    $("#audioPlayer")[0].play();
});

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
    currentsong--;
    console.log(currentsong + "back");

    if (currentsong < 0) {
        currentsong = $("#audio-playlist li a").length - 1;
        $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
    } else {
        $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;

    }
    $("#audioPlayer")[0].play();
    var title = $("#playlist tr td a.music:eq(" + currentsong + ")").text();
    $("#audio-title").html(title);

    console.log(title);

});
$("#next").click(function (e) {
    e.preventDefault();

    currentsong++;
    console.log(currentsong + "next");

    if (currentsong >= $("#audio-playlist li a").length) {
        currentsong = 0;
        $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
    } else {
        $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;

    }
    $("#audioPlayer")[0].play();
    var title = $("#playlist tr td a.music:eq(" + currentsong + ")").text();
    $("#audio-title").html(title);

    console.log(title);

});