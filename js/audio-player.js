$("#audioPlayer")[0].addEventListener("ended", function () {
    currentsong++;
    if (currentsong == $("#audio-playlist li a").length) {
        currentsong = 0;
    }
    $("#audioPlayer")[0].src = $("#audio-playlist li a")[currentsong].href;
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
    var title = $("#audio-playlist li a:eq(" + currentsong + ")").text();
    $("#audio-title").html(title);
    console.log(title);
});