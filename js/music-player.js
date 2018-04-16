$(document).ready(function () {

    var load = 0;
    if (load == 0) {
        play();
        load = 1;
    }

});

function play() {

    $("a.music").click(function (e) {
        e.preventDefault();
        currentsong = $(this).parent().parent().index();
        for (var i = 0; i < $("#audio-playlist li a").length; i++) {
            $("#audio-playlist ul").empty();
        }
        var k = 0;
        if (($("#audio-playlist li a").length < $("#playlist tr td a.music").length)) {
            for (var j = 0; j < $("#playlist tr td a.music").length; j++) {
                $("#audio-playlist ul").append("<li> <a href music> </a> </li>");
                $("#audio-playlist li a")[j].href = $("#playlist tr td a.music")[j].href;
                var text = $("#playlist tr td a.music:eq(" + k + ")").attr('music');
                $("#audio-playlist li a:eq(" + k + ")").html(text);
                ++k;
            }
        }
        $("#audioPlayer")[0].src = this;
        $("#audioPlayer")[0].play();
        var title = $(this).text();
        $("#audio-title").html(title);
    });
    


}