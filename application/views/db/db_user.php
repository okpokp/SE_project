<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->

<head>
    <!--Load style.css file, which store in css folder.-->
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style.css'>
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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='utf-8'>
    <script>
        $(function() {
            $('#ui_main').load('<?= base_url('Controller/ui_main') ?>');
            $('#ui_footer').load('<?= base_url('Controller/ui_footer') ?>');
        })
    </script>
    <title>Index</title>
</head>
<!--############################################## Header ###########################################################################-->


<header>
    <div id='ui_main'></div>
</header>
<!--############################################## Body ###########################################################################-->

<body>
    <div class='container_right_header'>
        <div>
            <h1>db_user</h1>
        </div>
    </div>
    <div class='container_right'>













        <?php
        $this->regist();
        print_r($s);
        ?>










































    </div>
</body>
<!--############################################## Footer ###########################################################################-->
<footer>
    <div id='ui_footer'></div>
</footer>
<!--############################################## End ###########################################################################-->

</html>