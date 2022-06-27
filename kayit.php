<?php ob_start(); ?>
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

                    <form action="" method="post">
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="ad" class="inp px-3 yazi" placeholder="Ad">
                            </div>
                            <div class="form-row py-3 pt-5">
                                <div class="offset-1 col-lg-10">
                                    <input type="text" name="soyad" class="inp px-3 yazi" placeholder="Soyad">
                                </div>
                                <div class="form-row py-3 pt-5">
                                    <div class="offset-1 col-lg-10">
                                        <input type="email" name="email" class="inp px-3 yazi " placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <div class="offset-1 col-lg-10">
                                        <input type="password" name="sifre" class="inp px-3 yazi" placeholder="Şifre">
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <div class="offset-1 col-lg-10">
                                        <button class="btn1 yazi"> Kayıt Ol</button>
                                    </div>
                                </div>
                    </form>
                    <!-- <p class="yazi  text-black-50 "> Alternatif Giriş </p>
                    <span><i class="fab fa-facebook"> </i></span>
                    <span> <i class="fab fa-google-plus"></i></span> -->
                </div>
            </div>
        </div>
    </section>


    <!-- Onaylama Popup -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title w-100">Kayıt Başarılı!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Lütfen bekleyin yönlendirileceksiniz.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" data-bs-dismiss="modal">TAMAM</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bir Hata oluştu -->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-confirm ">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background: #ef513a">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Bir Sorun Çıktı!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Tekrar Deneyiniz.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-block " style="background: #ef513a" data-bs-dismiss="modal">TAMAM</button>
                </div>
            </div>
        </div>
    </div>


    <?php

    //! Kayıt İşlemlerinin yapıldığı yer
    if (!empty($_POST)) {
        require "veritabani.php";

        $adi = $_POST['ad'];
        $soyadi = $_POST['soyad'];
        $eposta = $_POST['email'];
        $sifre = $_POST['sifre'];


        try {
            $sorgu = $db->prepare("INSERT INTO kullanici(ad, soyad, email,sifre) VALUES(?, ?, ?, ?)");
            $sorgu->bindParam(1, $adi, PDO::PARAM_STR);
            $sorgu->bindParam(2, $soyadi, PDO::PARAM_STR);
            $sorgu->bindParam(3, $eposta, PDO::PARAM_STR);
            $sorgu->bindParam(4, $sifre, PDO::PARAM_STR);

            $sorgu->execute();

            $db = null;


            echo "<script> window.onload = function() {
               Onay();
            }; </script>";

            header("Refresh: 2; url=./giris.php");
        } catch (PDOException $e) {
            echo "<script> window.onload = function() {
                Onaylama();
             }; </script>";
            //   die($e->getMessage());
        }
    }


    ?>









</body>
<script>
    function Onay() {
        $('#myModal').modal('show');
    }

    function Onaylama() {
        $('#myModal2').modal('show');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>


<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</html>

<?php ob_end_flush(); ?>