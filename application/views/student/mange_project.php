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
		<div class="row">
			<!-- Bar -->
			<div class="col-sm-2 well colora" style=" margin-top: 10px;">
				<div id='ui_tab'></div>
			</div>
			<!-- End Bar -->
			<div class="col-sm-10 well text-left size bgimg">
				<form class="needs-validation" novalidate>

							<div class="form-row" >
								<div class="col-sm-12">
									<div class="form-row">
										<div class="col-sm-12">
											<h3>หัวข้อโปรเจค :</h3>
											<input type="text" name="ProjectName"><br>

											<h3>ผู้จัดทำ :</h3>
										</div>
									</div>

									<div class="form-row" >
										<div class="col-sm-1.5">

											  <select name="title" style="height: 30px">
											    <option value="male">นาย</option>
											    <option value="female">นางสาว</option>
											  </select>
										</div>
										<div class="col-md-1.5" >
											<input type="text" name="f_name1" class="sizebox" placeholder="FirstName">
										</div>
										<div class="col-md-9">
											<input type="text" name="l_name1" class="sizebox"placeholder="LastName"><br><br>
										</div>
									</div>

									<div class="form-row" >
										<div class="col-sm-1.5">

											  <select name="title" style="height: 30px">
											    <option value="male">นาย</option>
											    <option value="female">นางสาว</option>
											  </select>
										</div>
										<div class="col-md-1.5" >
											<input type="text" name="f_name1" class="sizebox" placeholder="FirstName">
										</div>
										<div class="col-md-9">
												<input type="text" name="l_name1" class="sizebox"placeholder="LastName"><br><br>
										</div>
									</div>

									<div class="form-row" >
										<div class="col-sm-1.5">

											  <select name="title" style="height: 30px">
											    <option value="male">นาย</option>
											    <option value="female">นางสาว</option>
											  </select>
										</div>
										<div class="col-md-1.5" >
											<input type="text" name="f_name1" class="sizebox" placeholder="FirstName">
										</div>
										<div class="col-md-9">
											<input type="text" name="l_name1" class="sizebox"placeholder="LastName"><br><br>
										</div>
									</div>

										<h3>อาจารย์ที่ปรึกษา:</h3>
										<select class="form-control" id="sel1"style="width: 300px">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<select class="form-control" id="sel1" style="width: 300px">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<select class="form-control " id="sel1" style="width: 300px">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<select class="form-control " id="sel1" style="width: 300px">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>


										<h3>คำอธิบายโปรเจค :</h3>
										<textarea class="form-control" rows="5" id="info" style="width: 500px"></textarea><br>
										<a href="#" type="button" class="btn btn-success" >Submit</a>


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
