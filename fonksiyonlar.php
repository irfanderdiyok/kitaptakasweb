<?php

function navbar()
{
    echo '<header id="header">
    <nav class="navbar navbar-expand-lg kapsayici">
    <div class="container-fluid">

        <button class="navbar-toggler ms-auto logo_border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-book"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item me-5">
                    <a class="nav-link" href="kitapara.php">Kitap Ara</a>
                </li>

                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="kitaplar.php">Paylaşılan Kitaplar</a>
                </li>
               

                <li class="nav-item me-5 sirket">
                    <a class="navbar-brand " href="index.php">
                        <img src="images/book.png" class="img-fluid logo" alt="">
                    </a>
                </li>';



    // !Giriş kontrol
    if (empty($_SESSION["email"])) {
        echo ('<li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="giris.php">Giriş Yap</a>
                            </li>');
    } else {
        echo (' <li class="nav-item me-5">
        <a class="nav-link active" aria-current="page" href="sohbet.php">Sohbet</a>
    </li> <li class="nav-item me-5">
        <a class="nav-link active" aria-current="page" href="benimpaylastigim.php">Benim Paylaştığım Kitaplar</a>
    </li>
    <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="takas.php"> Takas</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="cikis.php">Çıkış Yap</a>
                            </li>');
    }

    echo '  </ul>

    </div>
    </div>
    </nav>
    </header>';
}




function SonNavbar()
{

    echo '<header id="header">
    <nav class="navbar navbar-expand-lg kapsayici">
    <div class="container-fluid">

        <button class="navbar-toggler ms-auto logo_border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-book"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
    </div>
    </div>
    </nav>
    </header>';
}
