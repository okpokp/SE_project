<!DOCTYPE html>
<html lang="en">

<?php
$web = "KUCPE";
$topic = "ประกาศ(teacher)";

?>

<head>
    <!-- Okp config -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load style.css file, which store in css folder -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Latest compiled JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='utf-8'>
    <!-- Win config -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-image: url('<?= base_url('./image/back_login.jpg') ?>');
        }

        #buttonCPE {
            margin-left: 200px;
        }

        #buttonlogin {
            margin-left: 300px;
            margin-top: 50px;
        }
    </style>
    <title><?php echo $web ?></title>
</head>

<!--############################################## Header ###########################################################################-->
<header>
</header>

<!--############################################## Body ###########################################################################-->

<body>
    <img src="<?= base_url('./image/CPE_login.png') ?>" width="450" id="buttonCPE">
    <a class="colora" type="button" href="<?= base_url('Controller/home_tch') ?>">TEACHER</a>
    <a class="colora" type="button" href="<?= base_url('Controller/home_std') ?>">STUDENT</a>
    <p>
        <a href="<?php echo $loginURL; ?>">
            <img src="<?= base_url('./image/icon-google.png') ?>" width="250" id="buttonlogin">
        </a>
    </p>
</body>
<!--############################################## Footer ###########################################################################-->
<footer>
    <div id='ui_footer'></div>
</footer>

<!--############################################## End ###########################################################################-->

</html>