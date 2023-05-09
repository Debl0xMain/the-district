<?php
echo '<header class="container">
    <nav class="navbar navbar-expand-sm justify-content-center fixed-top bg-nav">
        <div class="">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-5"><img class="logomin" src="/src/img/logo/logo1.png" alt="logomin"></span>
            </button>
            <div class="collapse navbar-collapse text-center text-align-center" id="n_bar">
                <ul class="navbar-nav">
                    <img class="navlogo" src="/src/img/logo/logo.png" alt="Logo The District">
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./index.php">Accueil</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./categorie.php">Categorie</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link  reveal-top navtext" href="./plats.php">Plats</a>
                </li>
                <li class="nav-item mx-3 pt-3">
                    <a class="nav-link reveal-top navtext" href="./contact.php">Contact</a>
                </li>
                <img class="navlogo" src="/src/img/logo/logo.png" alt="Logo The District">
                </ul>
            </div>';
            //if (session start = on) {include('login/profile.php');}
            //if (session start = off) {include('login/loginbtn.php');}
            include('login/loginbtn.php');
            echo
                '
        </div>
    </nav>
</header>

<div class="background"><img class="background" src="/src/img/background/background.jpg" alt=""></div>

';
include('login/loginmodal.php');
?>