$(document).ready(function () {
    play();
});

function play() {

    $("#playlist li a").click(function (e) {
        currentsong = $(this).parent().index();
        console.log(currentsong);
        e.preventDefault();
        for (var i = 0; i < $("#audio-playlist li a").length; i++) {
            $("#audio-playlist ul").empty();
        }
        var k = 0;
        $("#audioPlayer")[0].src = this;
        if (($("#audio-playlist li a").length < $("#playlist li a").length)) {
            for (var j = 0; j < $("#playlist li a").length; j++) {
                $("#audio-playlist ul").append("<li> <a href='' music> </a> </li>");
                $("#audio-playlist li a")[j].href = $("#playlist li a")[j].href;
                var text = $("#playlist li a:eq(" + k + ")").attr('music');
                $("#audio-playlist li a:eq(" + k + ")").html(text);
                ++k;
            }
        }
        $("#audioPlayer")[0].play();
        var title = $(this).attr("music");
        $("#audio-title").html(title);
    });

}