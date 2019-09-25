<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "กลุ่มโปรเจค(other)";

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
					<form class="needs-validation" novalidate>

						<div class="form-row">
							<div class="col-sm-6">
								<div>
									<table class="table table-bordered positionin">
										<tbody>
											<tr class="success">
												<td class="h_table" style="background-color: #7C0000 ">ชื่อโปรเจค</td>
												<td>Defaultson</td>
											</tr>
											<tr class="success">
												<td class="h_table" style="background-color: #7C0000 ">ชื่อภาษาอังกฤษ</td>
												<td>Defaultson</td>
											</tr>
									</table>
									<table class="table table-bordered positionin">
										<tbody>
											<tr class="success">
												<td class="h_table" style="background-color: #7C0000">ที่ปรึกษา</td>
												<td>Defaultson</td>
												<td>def@somemail.com</td>
											</tr>
											<tr class="success">
												<td class="h_table" style="background-color: #7C0000">กรรมการ</td>
												<td>Defaultson</td>
												<td>def@somemail.com</td>
											</tr>
											<tr class="success">
												<td class="h_table" style="background-color: #7C0000">สมาชิก</td>
												<td>Defaultson</td>
												<td>def@somemail.com</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div>
									<label class="positionin" for="">Info Project</label>
									<table class="table table-bordered positionin" style="margin-top:0px">
										<tbody>
											<tr class="success" style="height: 100px">
												<td>Defaultson</td>
											</tr>
									</table>
								</div>
								<div class="form-group  form-group-lg positionin">

									<input class="form-control" type="text" style="width : 750px " placeholder="แก้ไข ข้อมูลโปรเจค">
									<br>
									<!-- <label for="comment">Info Project:</label>
										<textarea class="form-control" rows="5" id="comment" placeholder="กรอกข้อมูล" style="width: 580px"></textarea> -->
								</div>
								<div>
									<button class="btn btn-success positionin " style="margin-top: 20px ">ยืนยัน</button>
								</div>
							</div>
						</div>
					</form>
					<!-- Body -->
				</div>
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