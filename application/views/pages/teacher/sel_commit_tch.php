<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "เลือกเป็นกรรมการ(teacher)";

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
    <script>
        $(function() {
            $('#ui_main').load('<?= base_url('Controller/ui_main') ?>');
            $('#ui_footer').load('<?= base_url('Controller/ui_footer') ?>');
            $('#ui_tab').load('<?= base_url('Controller/ui_tabtch') ?>');
        })
    </script>
    <style media="screen">
        .bgimg {
            background-image: url('<?= base_url('./image/back_inweb.jpg') ?>');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            /* z-index: -1; */
        }
    </style>
    <title><?php echo $web ?></title>
</head>

<!--############################################## Header ###########################################################################-->
<header style="height: 12.7vh">
	<div id='ui_main'></div>
</header>

<!--############################################## Body ###########################################################################-->

<body>
	<div class="container-fluid text-center">
		<div class="row">
			<!-- Bar -->
			<div class="col-sm-2 colora" style="min-height: 87.3vh">
				<div id='ui_tab'></div>
			</div>
			<!-- End Bar -->
			<div class="col-sm-10 text-left bgimg">
				<div class="colora" style="padding: 10px">
					<h2><?php echo $topic ?></h2>
				</div>
				<div class="container-fluid well">
					<!-- Body -->
                    <form action="<?= base_url('Controller/selcommit_tch') ?>" method='post' style="background-color:white;">
                        <div class="row">
                            <div class="col sty_pro sty_member">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>ชื่อ project</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>ต้องการเป็นกรรมการอันดับที่ </label>
                                    </div>
                                </div>
                                <!-- หัวข้อ -->
                                <div class="form-row align-items-center">
                                    <?php for ($i = 1; $i < 11; $i++) { ?>
                                        <div class="input-group col-sm-6 ">
                                            <span class="input-group-addon colora">กลุ่มที่ <?php echo $i; ?></span>
                                            <label type="text" class="form-control" name="msg" placeholder="name_priject"><b>SE za ba zuzu</b></label>

                                        </div>

                                        <div class="col-sm-3 ">
                                            <!-- <label class="sr-only" for="inlineFormInputName">Name</label> -->
                                            <input type="text" class="form-control" id="inlineFormInputName" placeholder="โปรดกรอก" style="margin-left: 13px;">
                                        </div>
                                        <hr>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="text-align:center;">
                            <br>
                            <button name='submit' class="btn colora" value='create_group'>ยืนยัน</button>
                            <button name='submit' class="btn colora " value='edit_group'>แก้ไข</button>
                        </div>
                    </form>
                    <!-- Body -->
                </div>
            </div>
        </div>
    </div>
</body>
<!--############################################## Footer ###########################################################################-->
<footer>
    <div id='ui_footer'></div>
</footer>

<!--############################################## End ###########################################################################-->

</html>