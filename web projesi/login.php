<?php
session_start(); 

$passErr = $emailErr = "";
$pass = $email = "";
$filename = 'legal';

if (file_exists($filename)) {
    if (unlink($filename)) {
    } else {
    }
}

if (isset($_POST['submit'])) {

    /* arraylar */
    $users = array('b241210552@sakarya.edu.tr' => 'b241210552', 'b201210585@sakarya.edu.tr' => 'b201210585', 'a@b.com' => '123');

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    if (empty($_POST["email"])) {
        $emailErr = "Kullanıcı adı (e-posta biçiminde) gerekli";
    } else {
        // doğru olmayan karakter kontrol
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // e mail doğru mu diye kontrol
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Geçersiz e-posta formatı";
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Şifre gereklidir";
    }

    /* kullanıcı adı ve şifre array kontrol */
    if (isset($users[$email]) && $users[$email] == $pass) {
        /* başaralılı  */
        $msg = "<span style='color:green'>Başarılı Giriş</span>";
        
        $_SESSION['UserData']['email'] = $users[$email];
        if (unlink($filename)) {
        } else {
        }
        if (!file_exists($filename)) {
            fopen($filename, 'wb');
            chmod($filename, 0600);
            system('attrib +H ' . escapeshellarg($filename));
        }
        header("location:index.php");
        exit;
    } else {
        if (file_exists($filename)) {
            if (unlink($filename)) {
            } else {
            }
            /*başarısız */
        }
        $msg = "<span style='color:red'>Geçersiz giriş detayları</span>";
    }
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

<body class="overflow-auto" style="background-image: url('images/bg011.jpg')">
    <div class="flex-wrap container justify-content-around">
        <div class="row justify-content-around">
            <div class="col-md-auto"></div>

            <div class="col-md-9">
                <h4 class="d-inline-block p-2 shadow">Hoşgeldiniz sayın konuğum, web sitemi ziyaret etmek için lütfen
                    giriş yapınız
                </h4>
                <br>
                <form action="" method="post" name="login_form">
                    <div class=" form-group"> <span>
                            <i class="fa-solid fa-user-graduate"></i>
                        </span>
                        <label class="control-label" for="email">Kullanıcı adı [yani
                           b241210552@sakarya.edu.tr]:</label>

                        <small id="username-er" class="text-primary">* <?php echo $emailErr; ?> </small>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder=" Kullanıcı Adını Girin">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <span>
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <label class="control-label" for="pass">Giriş şifresi:</label>
                        <small id="password-er" class="text-primary"> * <?php echo $passErr; ?></small>
                        <div class="col-sm-10">
                            <div class="input-group-append">
                                <input type="password" class="form-control" id="pass" name="pass"
                                    placeholder="Giriş Şifresini Girin">
                                <span class="eye-viewer" onclick="password_show_hide();">
                                    <i class="fa fa-eye" id="show_eye"></i>
                                    <i class="fa fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <button class="btn btn-dark opacity-50 shadow" type="submit" name="submit" id="submit">Giriş
                            Yap</button>
                        <?php if (isset($msg)) { ?> <small><?php echo $msg; ?></small> <?php } ?>
                    </div>
                </form>
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
    <script src="js/eyetoggle.js"></script>

</body>

</html>