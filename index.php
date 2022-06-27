<?php
ob_start();
session_start();
require "fonksiyonlar.php";
?>

<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitap Takas</title>
    <link rel="icon" href="./img/book.ico" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navbar.css" rel="stylesheet">

</head>

<body>


    <?php navbar(); ?>






    <section class="generic" id="about">
        <div class="container">
            <!-- container-fluid yanlarda boşluk olmamasını sağlar. 1 satır 12 birime denk gelmektedir-->
            <h2 class="display-5 text-danger mb-5"> KİTAP TAKAS</h2>
            <div class="row mb-3">
                <!--mb-3 satrlar arasında 3 birim boşluk vermeye yarar.-->
                <div class="col-8 bg-light">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p> Evrenin nasıl var olduğunu, Amerika kıtasının yer şekillerini, kutuptaki penguenlerin yaşamını, denizin derinliklerindeki canlıları oralara gitmeden öğrenmek mümkün müdür? Okuduğumuz kitaplar olmasaydı bu bilgileri nasıl elde edebilirdik?
                            Oralara gitmemiz gerekirdi değil mi? Oysa kitaplar, bize tüm bunları, dakikalar içinde öğretebilir.Bir kitap, bizlere bir dünya öğretebilir. Öğrenmek için ömrümüz boyunca gezsek, belki dünya hakkında yeteri kadar bilgi sahibi olamayız.
                            Ancak tek bir kitapta, dünyanın tüm bilgilerini okuyup öğrenmemiz mümkündür. </p>
                    </div>
                </div>
                <div class="col-4 p-0">
                    <img class="img-fluid" src="./images/foto1.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-8 bg-light">
                    <div class="d-flex h-100 flex-column justify-content-center">
                        <p> "Kitaplar hem iyi bilgi kaynakları hem de en iyi dostlardır.
                            Onlarla iyi vakit geçirir, bazen eğlenir bazen üzülürüz.
                            Ancak bize hiçbir zaman kötülük yapmazlar. Onları kullanmayı, okumayı öğrendiğimiz sürece kulumuz, kölemiz olurlar.
                            Efendilerinden istedikleri tek şey ise okumaktır." </p>
                    </div>
                </div>
                <div class="col-4 order-first p-0">
                    <img class="img-fluid" src="./images/foto2.jpg">
                </div>
            </div>
        </div>
    </section>


    </br> </br>

    <div class="container">
        <section id="latest">
            <div class="container">
                <h2 class="display-5 text-danger mb-5">Nasıl Takas Yaparız?</h2>
            </div>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/nasil1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>First slide label</h5> -->
                            <p>Öncelikle siteye giriş yapılması gerekmektedir. Eğer üyeliğiniz yok ise giriş kısmında bulunan "Hesabım yok mu?" bölümüne tıklayarak kayıt olunuz.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/images/nasil2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                            <p>Başarılı bir şekilde giriş yapıldıktan sonra menüde bulunan takas sekmesine tıklanır. Açılan sayfada boş kısımlar doldurularak paylaş bölümüne tıklanır.</p>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </section>
    </div>




    <br> <br>
    <!--Blog Section-->

    <section id="blog" class="generic">
        <div class="container">
            <h2 class="display-5 text-danger mb-5">POPÜLER KİTAPLAR</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">

                    <div class="card bg-light border-0">
                        <img src="./images/nasil3.png" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                Simyacı
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                Paulo Coelho
                            </h6>
                            <p class="card-text">
                                Simyacı, Santiago adındaki Endülüslü bir çobanın İspanya'dan başlayıp Mısır'da sona eren yolculuğunu konu ediniyor. Gördüğü bir rüya üzerine sahip olduğu her şeyi ardında bırakan Santiago'nun bu serüveni,
                                onu düşlerine kavuşturduğu kadar hayatın hakikatine de ulaştırıyor.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                10.01.2022
                                            </span>
                                        </i>
                                    </small>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light border-0">
                        <img src=".\yuklenen\kitap14.jpg" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                1984
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                George Orwell
                            </h6>
                            <p class="card-text">
                                George Orwell’in yazdığı distopik bir dünyada geçen kitap, en popüler kitaplar arasında yer alıyor.
                                Kitap, insan zihninin kontrol edilip bireyselliğin yok edildiği, bu da yetmezmiş gibi insanların makineleşmiş topluluklara dönüştürüldüğü bir totaliter dünya düzenini anlatıyor.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                10.01.2022
                                            </span>
                                        </i>
                                    </small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light border-0">
                        <img src="./images/nasil4.png" class="card-img-top rounded-0">
                        <div class="card-body ps-3">
                            <h5 class="lead text-uppercase text-danger mb-4">
                                Yüzüklerin Efendisi
                            </h5>
                            <h6 class="card-title text-uppercase text-danger">
                                J. R. R. Tolkien
                            </h6>
                            <p class="card-text">
                                Kitabın hikayesi, İngiliz kırsalından pek de farklı olmayan Hobbit diyarı Shire’da sakince başlar.
                                Daha sonra hikaye Orta Dünya’nın kuzeybatısına kadar uzanırken Hobbitler;
                                Frodo, Sam, Merry ve Pippin’in yanı sıra Hobbitlerin müttefikleri ve yol arkadaşları olan Kuzey Kolcusu Aragorn, Gondor kumandanı Boromir, savaşçı Cüce Gimli, Elf prensi Legolas ve büyücü Gandalf’ın gözünden Yüzük Savaşı’nın gidişatını işler.
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <small class="text-muted">
                                        <i class="bi bi-clock">
                                            <span class="align-middle">
                                                10.01.2022
                                            </span>
                                        </i>
                                    </small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>



    <header id="header" style="transform: rotate(180deg);">
        <nav class="navbar navbar-expand-lg kapsayici">
            <div class="container-fluid">

                <button class="navbar-toggler ms-auto logo_border" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-book"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul>
                        <li style="color:rgb(250, 117, 69);"></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php ob_end_flush(); ?>