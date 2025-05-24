<?php
session_start();
/* Starts the session */
if (!isset($_SESSION['UserData']['email'])) {
    header("location:login.php");
    exit;
} else {
    header("refresh:5;url=hakkimda.html");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Web Teknolojisi Projesi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/clock.css" rel="stylesheet">
</head>

<body class="overflow-auto" style="background-image: url('images/arkaplan.jpg')">
    <div class="flex-wrap container justify-content-around">
        <div class="row justify-content-around">
            <div class="col-md-auto">

            </div>

            <div class=" col-md-9">
                <h1 class="text-black-50 shadow-lg" style="font-size: 60px;" onchange="leg()">
                    Hoşgeldiniz! <?php
                                    echo $_SESSION['UserData']['email'];
                                    ?></h1>
                <br>
                <hr>
                <br>
                <h2>5 saniye içinde ana siteye yönlendirilir.</h2>
            </div>
            <div class="col-md-auto">
                <div class="clock-container">
                    <div class="clock">
                        <div class="needle hour"></div>
                        <div class="needle minute"></div>
                        <div class="needle second"></div>
                        <div class="center-point"></div>
                    </div>
                    <div class="time"></div>
                    <div class="date"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="js/clock.js"></script>
    <script src="js/scroll.js"></script>

</body>

</html>