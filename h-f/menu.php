<div class="container">
    <div class="d-flex justify-content-center">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a id="nav-home" href="" class="nav-link active text-light">Home</a>
            </li>

            <li class="nav-item">
                <a id="nav-music" href="" class="nav-link text-light">Music</a>
            </li>
            <li class="nav-item">
                <a id="nav-album" href="" class="nav-link text-light">Album</a>
            </li>
            <!-- <li class="nav-item text-light">
                    <input type="search" name="search" id="search">
                    <button class="btn btn-link">
                        <i class="fas fa-search"></i>
                    </button>
                </li> -->
        </ul>
    </div>
</div>

<script>

    $("#sub-menu .nav-item").click(function (e) {
        e.preventDefault();
    });
    
    // $("#nav-home").click(function (e){
    //     $(".music-page").hide();
    //     $(".album-page").hide();
    //     $("#nav-album").removeClass("active");
    //     $("#nav-music").removeClass("active");
    //     $(this).addClass("active");
    //     $(".home-page").show();
    // });
    // $("#nav-music").click(function (e){
    //     $(".home-page").hide();
    //     $(".album-page").hide();
    //     $("#nav-home").removeClass("active");
    //     $("#nav-album").removeClass("active");
    //     $(this).addClass("active");
    //     $(".music-page").show();
    // });
    // $("#nav-album").click(function (e){
    //     $(".home-page").hide();
    //     $(".music-page").hide();
    //     $("#nav-home").removeClass("active");
    //     $("#nav-music").removeClass("active");
    //     $(this).addClass("active");
    //     $(".album-page").show();
    // });
   
    $("#nav-home").click(function () {
        $("#clear").empty();
        // $(".music-page").hide();
        // $(".album-page").hide();
        $("#nav-album").removeClass("active");
        $("#nav-music").removeClass("active");
        $(this).addClass("active");
        // $(".home-page").show();
        $("#clear-content").load("html/home.html");

    });
    $("#nav-music").click(function () {
        $("#clear").empty();
        // $(".home-page").hide();
        // $(".album-page").hide();
        $("#nav-home").removeClass("active");
        $("#nav-album").removeClass("active");
        $(this).addClass("active");
        // $(".music-page").show();
        $("#clear-content").load("html/music.html");
    });
    $("#nav-album").click(function () {
        $("#clear").empty();
        // $(".home-page").hide();
        // $(".music-page").hide();
        $("#nav-home").removeClass("active");
        $("#nav-music").removeClass("active");
        $(this).addClass("active");
        // $(".album-page").show();
        $("#clear-content").load("html/album.html");
    });
</script>
