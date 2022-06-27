<?php ob_start();
session_start(); ?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>


    <style>
        .col img {
            width: 512px;
            height: 800px;

        }




        .mesaj {
            width: 512px;
            height: 800px;
            background: #eee;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 0 5px black;
            border-radius: 1rem;
            overflow: hidden;
            position: relative;
        }

        .mesaj h2 {
            background: rgb(250, 117, 69);
            color: yellow;
            padding: 1rem;

        }

        .mesaj .input {
            display: flex;
            justify-content: space-between;
            padding: .5rem;
            background: white;
            min-height: 60px;
        }

        .mesaj .input input {
            width: 100%;
            margin-right: .5rem;
            padding: .5rem;
            border: none;
            outline: none;
            border-bottom: solid 1px #ddd;
            color: #444;
            font-size: 1rem;
        }

        .mesaj .input button {
            padding: .5rem;
            border: none;
            outline: none;
            background: rgb(250, 117, 69);
            color: white;
            font-size: 1.2rem;
            border-radius: 50%;
            width: 50px;
            height: 45px;
            cursor: pointer;
        }

        ul.messages {
            list-style: none;
            flex-grow: 1;
            background: #ece5dd;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow: hidden;
            overflow-y: scroll;
        }

        ul.messages li.message {
            max-width: 80%;
            background: #ebebeb;
            margin: .5rem 1rem;
            padding: 1.5rem .5rem 1rem .5rem;
            border-radius: 1rem;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .3);
            color: #444;
            position: relative;
        }

        ul.messages li.message.mine {
            align-self: flex-end;
            padding-top: 1rem;
            background: #DCF8C6;
        }

        ul.messages li.message span.sender {
            position: absolute;
            top: .5rem;
            left: .5rem;
            color: #3498db;
            font-weight: bold;
            font-size: .8rem;
        }

        ul.messages li.message span.date {
            position: absolute;
            bottom: .2rem;
            right: .5rem;
            font-size: .7rem;
            color: #999;
        }

        .mesaj .login {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #ebebee;
            z-index: 99;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #444;
            padding: 1rem;
        }

        .mesaj .login.hidden {
            display: none;
        }

        .mesaj .login span {
            font-size: 1.2rem;
        }

        .mesaj .login input {
            font-size: 1.2rem;
            padding: .5rem;
            width: 100%;
            border: none;
            outline: none;
            background: #ebebee;
            color: #444;
            border-bottom: solid 1px #ccc;
            margin: 1.5rem 0rem;
            text-align: center;
        }

        .mesaj .login button {
            border: none;
            outline: none;
            background: rgb(250, 117, 69);
            color: white;
            padding: 1rem;
            border-radius: 1rem;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>






</head>

<body>
    <?php
    require "fonksiyonlar.php";
    navbar();


    require "veritabani.php";

    $login = $db->prepare("SELECT * FROM sohbetettiklerim WHERE kim=?");
    $login->execute(array($_SESSION["id"]));










    ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">


            <div class="col">

                <div class="card" style="width: 25rem; height: 50vh;">
                    <div class="card-header" style="background-color:rgb(250, 117, 69); color:yellow">
                        <h2> Kişiler</h2>
                    </div>
                    <ul class="list-group list-group-flush overflow-auto">

                        <?php

                        if ($login->rowCount()) {

                            foreach ($login as $row) {

                                $login = $db->prepare("SELECT * FROM kullanici WHERE id=?");
                                $login->execute(array($row["kimle"]));
                                $user = $login->fetch();


                                echo ' <a style="text-decoration: none;" href="./deneme.php?gonderen=' . $row["kimle"] . '"> <li class="list-group-item">' . $user["ad"] . ' ' . $user["soyad"] . '</li>  </a>';
                            }
                        }


                        ?>
                    </ul>
                </div>





            </div>


            <div class="col">


                <div class="mesaj">

                    <h2>Sohbet</h2>
                    <ul id="messages" class="messages">
                        <!-- <li class="message mine">
                            <p class="text">Merhaba kitabınızı ödünç alabilir miyim?</p>
                            <span class="date">14:55</span>
                        </li>
                        <li class="message">
                            <p class="text">Lore</p>
                            <span class="sender">İrfan DERDİYOK</span>
                            <span class="date">14:55</span>
                        </li>
                        <li class="message mine">
                            <p class="text">Aferin adam oluyorsun</p>
                            <span class="date">14:56</span>
                        </li> -->
                    </ul>
                    <form id="mesajYollamaForm" method="POST">
                        <div class="input">
                            <input type="text" name="mesaj" id="textsil">
                            <button onclick="mesajYolla();" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>



            </div>

        </div>
    </div>












</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    mesajYolla = function() {
        $.ajax({
            type: "POST",
            url: "veri.php",
            data: $('#mesajYollamaForm').serialize(),
            dataType: "json",
            success: function() {
                // $("#textsil").html(" ");
            }

        })
    };

    mesajAl = function() {
        $.ajax({
            type: "POST",
            url: "sohbetgun.php",
            data: " ",
            dataType: "json",
            success: function(cevap) {
                $("#messages").html(cevap);
            }

        })
    };

    $(document).ready(function() {
        mesajAl();
        setInterval(mesajAl, 1000);
    });
</script>


</html>



<?php ob_end_flush(); ?>