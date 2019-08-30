<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->

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
			$('#ui_tab').load('<?= base_url('Controller/ui_tabstd') ?>');
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
	<title>Index</title>
</head>
<!--############################################## Header ###########################################################################-->
<header>
	<div id='ui_main'></div>
</header>
<!--############################################## Body ###########################################################################-->
<body>
	<div class="container-fluid text-center">
		<div class="row" style="background-color: white;">
			<!-- Bar -->
			<div class="col-sm-2 well colora" style=" margin-top: 10px;">
        <br>
				<div id='ui_tab'></div>
			</div>
			<!-- End Bar -->
			<div class="col-sm-10  text-left size bgimg">
        <form class="needs-validation" novalidate>

              <div class="form-row">
                <div class="col-sm-6">
                  <br>
                  <br>
                  <h1>ข้อมูลนิสิต</h1>
                  <label >ชื่อ : </label>
                  <label >okpokp</label>
                  <label >&nbsp; &nbsp;นามสกุล : </label>
                  <label >booloi</label><br>
                  <label>รหัสนิสิต : 5930300160 &nbsp;&nbsp;&nbsp;&nbsp; สาขา :  T12</label><br>

                  <label>ชื่อโครงงาน : SE ZA eieieieiei</label><br>
                  <label>หมายเลขโครงงาน : 1</label><br>
                  <label>สมาชิกกลุ่ม : 1 .นายอำนวย โชคดี</label><br>
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 .นายอำนวย โชคดี</label><br>
                  <label>อาจารย์ที่ปรึกษาโครงงาน : อาจารย์อำนวย ผ่านชัวร์</label><br>
                  <label>จำนวนที่เข้าพบอาจารย์ที่ปรึกษา :  1/10</label><br>
                  <label>อาจารย์กรรมการโครงงาน : อาจารย์เจษกา ประกันทรัพย์</label><br>
									<label hidden>okp</label>

                </div>
              </div>
            </form>
				<!-- End Body -->
			</div>
		</div>
	</div>
</body>
<!--#### Footer ####-->

<footer>
	<div id='ui_footer'></div>
</footer>
<!--### End #-->
</html>

<!-- ==================== Insert Picture ==================== -->
