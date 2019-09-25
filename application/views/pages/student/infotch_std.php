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
			<div class="col-sm-10 well text-left size bgimg">
				<div class="colora"style="padding: 10px">
						<h2>ข้อมูลอาจารย์</h2>
				</div>
				<!-- <div class="container well w3-white"> -->
					<!-- <h2 style="font-size: 32px;"><u>ข้อมูลอาจารย์</u></h2> -->
          <table class="table table-bordered table-striped well">
            <thead>
              <tr>
                <th><center>ชื่อ - นามสกุล</center></th>
                <th><center>ความถนัด</center></th>
                <th><center>จำนวนที่รับได้</center></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ผศ.ดร.ประวิทย์ ชุมชู</td>
                <td>Network</td>
                <td>7/7</td>
              </tr>
              <tr>
                <td>ผศ.ดร.อนันต์ บรรหารสกุล</td>
                <td>Database</td>
                <td>5/5</td>
              </tr>
              <tr>
                <td>ผศ.ดร.กุลวดี สมบูรณ์วิวัฒน์</td>
                <td>Everything</td>
                <td>7/7</td>
              </tr>
              <tr>
                <td>ผศ.เพ็ญพรรณ ใช้ฮวดเจริญ์</td>
                <td>Abstack Datatype</td>
                <td>5/5</td>
              </tr>
              <tr>
                <td>ดร.นันทา จันทร์พิทักษ์</td>
                <td>Security</td>
                <td>7/7</td>
              </tr>
              <tr>
                <td>อ.กาญจนา เอี่ยมสอาด์</td>
                <td>Admin</td>
                <td>7/7</td>
              </tr>
              <tr>
                <td>อ.จิรวัฒน์ จิตประสูตรวิทย์</td>
                <td>Everything</td>
                <td>6/6</td>
              </tr>
              <tr>
                <td>ดร.อดิศักดิ์ สุภีสุน์</td>
                <td>Game</td>
                <td>6/6</td>
              </tr>
              <tr>
                <td>ดร.ณัฐพล พันนุรัตน์์</td>
                <td>Everything</td>
                <td>7/7</td>
              </tr>
              <tr>
                <td>ดร.กรวิทย์ ออกผล์์</td>
                <td>Everything</td>
                <td>8/8</td>
              </tr>
            </tbody>
          </table>
				<!-- </div> -->
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
