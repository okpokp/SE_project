<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->

<head>
	<!-- Okp config -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Load style.css file, which store in css folder -->
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
			$('#ui_tab').load('<?= base_url('Controller/ui_tabtch') ?>');
		})
	</script>
	<style media="screen">
		label {
			font-size: 20px;
		}

		.size {
			height: 970px;
			border-width: 20px;
			border-color: orange;
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
		<div class="row">
			<!-- Bar -->
			<div class="col-sm-2 well w3-white">
				<div id='ui_tab'></div>
			</div>
			<!-- End Bar -->
			<div class="col-sm-10 well text-left size">
				<!-- Body -->








				<!-- Start Get DB_value -->
				<?php
				foreach ($show->result() as $row) {
					?>
				<!-- Start Body -->

				<?php
					echo "
				<div>
					<h3>หัวข้อ</h3>
				</div>
				<div>
					$row->name_project
				</div>";
					echo "
				<div>
					<h3>รายละเอียด</h3>
				</div>
				<div>
					$row->info_project
				</div>";

					?>
				<!-- End Body -->
				<?php
				}
				?>
				<!-- End Get DB_value -->




				<div>
					<h3>สมาชิก
				</div>
				<div>
					<ul>
						<li>นาย จิรพัชร์ เหลืองรุ่งเกียรติ</li>
						<li>นาย เจตพล บุญลอย</li>
					</ul>
				</div>
				<div>
					<h3>อาจารย์ที่ปรึกษา
				</div>
				<div>
					<ul>
						<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
					</ul>
				</div>
				<div>
					<h3>กรรมการ
				</div>
				<div>
					<ul>
						<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
						<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
					</ul>
				</div>
				<div>
					<h3>รายงาน
				</div>
				<div>
					<a href='#'>Document.doc</a>
				</div>











				<!-- End Body -->
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