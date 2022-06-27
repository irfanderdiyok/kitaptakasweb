<?php ob_start();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"">

    <link href=" ./css/navbar.css" rel="stylesheet">




</head>


<body>

    <?php navbar(); ?>







    <div class="container" style="margin-top: 50px;">
        <div class="d-flex justify-content-center" style="color:rgb(250, 117, 69)">
            <h1>Kitaplar</h1>
        </div>
    </div>


    <div class="container" style="margin-top: 50px;">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <?php kitap(); ?>
        </div>
    </div>














    <?php

    function kitap()
    {
        require "veritabani.php";

        $login = $db->prepare("SELECT * FROM kitap");
        $login->execute();



        if ($login->rowCount()) {

            foreach ($login as $row) {
                $kim = $db->prepare("SELECT * FROM kullanici WHERE id=?");
                $kim->execute(array($row['kimEkledi']));
                $user = $kim->fetch();

                echo '
               
                <div  class="col" >
                        <div class="card" >
                        <a href="chat.php?gonderen=' . $row['kimEkledi'] . '&kitap=' . $row['Id'] . '">
                        
                            <img src="./yuklenen/' . $row['resim'] . '" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">' . $row['ad'] . '</h5>
                                <p class="card-text">Yazar : ' . $row['yazar'] . '</p>
                                <p class="card-text">Yayınevi : ' . $row['yayinEvi'] . '</p>
                                <p class="card-text">Kim paylaştı : ' . $user['ad'] . ' ' . $user['soyad'] . '</p>
                            </div>
                           
                        </div>
                    </div>
                    
                ';
            }
        } else {
            //die($e->getMessage());
        }
        $db = null;
    }
    ?>









</body>



<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>





</html>


<?php ob_end_flush(); ?>