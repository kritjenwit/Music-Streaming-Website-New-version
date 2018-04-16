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
    
    <!-- 
        Local JavaScript 
    -->

    <!-- load header and footer -->
    <script src="js/load-header-footer.js"></script>


    <!-- CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/home.css">
    <style>
        body{
            margin:70px;
        }
    </style>

    <title>Neon | Music Streaming Website</title>
</head>

<body>
    <header>
        
    </header>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3 text-center">"Just <strong>CLICK</strong>  and <strong>Listen</strong>"</h1>
        </div>
    </div>

    <section id="sub-menu">
        <script>
            $("#sub-menu").load("h-f/menu.php");
        </script>
    </section>

    <div id="clear-content">
        <script>
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