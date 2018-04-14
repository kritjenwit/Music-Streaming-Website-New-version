<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Optional file -->

    <!-- JavaScript -->

    <!-- JQuery -->
    <script src="dist/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="dist/bootstrap.bundle.js"></script>
    <!-- Font awsome -->
    <script src="dist/fontawesome-all.js"></script>
    <!-- beautifull scroll -->
    <!-- Local JavaScript -->
    <!-- load header and footer -->
    <script src="js/load-header-footer.js"></script>
    <!-- index JavaScript -->


    <!-- CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/home.css">

    <title>Neon | Welcome</title>
</head>

<body>
    <header>
        
    </header>

    <section id="sub-menu">
        <script>
            $("#sub-menu").load("h-f/menu.php");
        </script>
    </section>

    <div id="clear-content">
        <!-- <div class="home-page"></div>
        <div class="music-page"></div>
        <div class="album-page"></div>
        <div class="album-body"></div> -->
            <script>
                // $(".home-page").load("html/home.html");
                // $(".music-page").load("html/music.html");
                // $(".album-page").load("html/album.html");
                // $(".album-body").load("html/all-album.html");
                $("#clear-content").load("html/home.html");
            </script>
    </div>

    <div id="audio">
        <script>
            $("#audio").load("h-f/audio.html");
        </script>
    </div>

    <footer>
        
    </footer>


</body>

</html>