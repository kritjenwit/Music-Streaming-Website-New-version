<nav class="navbar navbar-expand-sm bg-dark fixed-top navbar-dark">
    <?php

        session_start();   
    
        // TO Check which is login or not
        require "../php/sign-in-check.php";
        // To show NAME of USER
        require "../php/show-user-sign-in.php";
    
    ?>
        <div class="container">
            <a id="logo" class="navbar-brand" href="">
                <i class="fas fa-headphones"></i>Neon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav ml-auto" id="">
                    <li class="nav-item">
                        <span class="navbar-brand mb-0" id="profileName"> Welcome:
                            <?php echo $_SESSION['name'] ?>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile/profile.php">
                            <i class="fas fa-user"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/sign-out.php">
                            <i class="fas fa-sign-out-alt"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

<script>
    $("#logo").click(function (e) {
        e.preventDefault();
    });
</script>