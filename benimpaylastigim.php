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
    <?php navbar() ?>




    <div class="container" style="margin-top: 50px;">
        <div class="d-flex justify-content-center" style="color:rgb(250, 117, 69)">
            <h1>Benim Kitaplarım</h1>
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

        $kim = $db->prepare("SELECT * FROM kitap WHERE kimEkledi=?");
        $kim->execute(array($_SESSION['id']));




        if ($kim->rowCount()) {

            foreach ($kim as $row) {


                echo '<div class="col">
                        <div class="card">
                            <img src="./yuklenen/' . $row['resim'] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['ad'] . '</h5>
                                <p class="card-text">Yazar : ' . $row['yazar'] . '</p>
                                <p class="card-text">Yayınevi : ' . $row['yayinEvi'] . '</p>
                                <a href="sil.php?silinecek=' . $row['Id'] . '">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-x" viewBox="0 0 16 16">
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
    </svg></a>
                               
                            </div>
                        </div>
                    </div>';
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