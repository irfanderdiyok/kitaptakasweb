<?php ob_start();
session_start(); ?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitap Takas</title>
    <link rel="icon" href="./img/book.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"">
    <link href=" https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href=" ./css/form.css" rel="stylesheet">
    <link href="./css/popup.css" rel="stylesheet">


</head>





<body>
    <section class=" login py-5 bg-light">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="./images/book.jpg" class="img-fluid " alt="">
                </div>
                <div class="col-lg-7 text-center py-5">
                    <h2 class="animate__animated animate__heartBeat animate__infinite yazi baslik " style="color:rgb(250, 117, 69)"> Kitap Takas </h2>

                    <form action="./sonuc.php" method="post" >
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="ad" class="inp px-3 yazi" placeholder="Aranacak kitap adını girin:">
                            </div>
                            <div class="form-row py-3 pt-5">
                                <div class="form-row py-3">
                                    <div class="offset-1 col-lg-10">
                                        <button class="btn1 yazi">Ara</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>















</body>



<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</html>

<?php ob_end_flush(); ?>