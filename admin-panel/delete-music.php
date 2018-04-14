<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Optional file -->

    <!-- JavaScript -->

    <!-- JQuery -->
    <script src="../dist/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../dist/bootstrap.bundle.js"></script>
    <!-- Font awsome -->
    <script src="../dist/fontawesome-all.js"></script>
    <!-- beautifull scroll -->
    <!-- Local JavaScript -->

    <!-- CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../dist/bootstrap.css">
    <!-- Local CSS -->


    <title>Neon | Welcome</title>
</head>

<style>
    #dashboard a {
        text-decoration: none;
    }

    #dashboard .card-body {
        color: #333;
        background-color: lightgray;
    }

    .del-line a {
        text-decoration: none;
    }

    section .card-body {
        color: #333;
        background-color: lightgray;
    }

    #add-music,
    #add-al {
        top: 15vh;
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body class="">

    <nav class="navbar navbar-dark bg-dark navbar-expand-sm" id="top-nav">
        <a href="dashboard.php?user-table=1&music-table=1&album-table=1" class="navbar-brand">Neon Admin</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <span class="navbar-brand">
                        <?php echo $_SESSION['admin_name'] ?>
                    </span>
                </li>
                <li class="nav-item">
                    <a href="../php/admin-panel/admin-sign-out.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="nav justify-content-center nav-pills p-3 bg-secondary">
        <li class="nav-item">
            <a class="nav-link text-light" href="dashboard.php?user-table=1&music-table=1&album-table=1">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">Table</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#user-table">User</a>
                <a class="dropdown-item" href="#music-table">Music</a>
                <a class="dropdown-item" href="#album-table">Album</a>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="add-music.php">Add music or album</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light active" href="delete-music.php">Delete music or album</a>
        </li>

    </ul>

    <div class="container pt-5">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active">
                Dashboard
            </li>

        </ul>
    </div>

    <!-- 
        TODO HERE 
    -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6  del-line">
                    <a href="" data-toggle="modal" data-target="#del-music">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="py-4 display-4">Delete music</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 del-line">
                    <a href="" data-toggle="modal" data-target="#del-al">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="py-4 display-4">Delete Album</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Add music mondal -->
    <div class="modal fade" id="del-music">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-dark text-light">
                    <h4 class="modal-title">Delete Music</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="../php/admin-panel/opt/delete/delete-music.php" class="was-validated" method="POST" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="music_name" placeholder="Music name" required>
                        <br>
                        <input type="text" class="form-control" name="music_artist" placeholder="Artist name" required>
                        <br>
                        <button class="btn btn-block btn-success" name="music_upload">Confirm</button>

                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Add album mondal -->
    <div class="modal fade" id="del-al">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header  bg-dark text-light">
                    <h4 class="modal-title">Delete Album</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="../php/admin-panel/opt/delete/delete-album.php" class="was-validated" method="POST" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="album_name" placeholder="Album name" required>
                        <br>
                        <input type="text" class="form-control" name="album_artist" placeholder="Artist name" required>
                        <br>
                        <button class="btn btn-block btn-success" name="album_upload"> Confirm</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <footer class="py-3 bg-dark">
        <div class="container-fluid text-center text-light">
            <p>
                <strong>&copy; 2018, Neon Admin </strong>
            </p>
        </div>
    </footer>
    <script>
        alert("Please select type of file to be delete");
    </script>
</body>

</html>