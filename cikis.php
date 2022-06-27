<?php ob_start();
session_start(); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıkış Yapılıyor...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"">
    <link href=" https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/popup.css" rel="stylesheet">
</head>

<body>

     <!-- Onaylama Popup -->
     <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title w-100">Çıkış Başarılı!</h4>
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

    <?php
  
    session_destroy();
    echo "<script> window.onload = function() {
        Onay();
     }; </script>";

     header("Refresh: 2; url=./index.php");

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