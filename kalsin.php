<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div id="sonuc">Sonuc:</div>

    <form id="ajax">
        <input type="text" onclick="mesajYolla();" name="mesaj">
    </form>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    mesajYolla = function() {
        $.ajax({
            type: "POST",
            url: "veri.php",
            data: {

                mesaj: "Yarrak",
                at: "Sik",

            },
            dataType: "json",
            success: function(cevap) {
                $("#sonuc").html(cevap.mesaj);
            }

        })
    };

    $(document).ready(function() {
        setInterval(mesajYolla, 1000);
    });
</script>

</html>