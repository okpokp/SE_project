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
				if ($show->num_rows() > 0) {
					foreach ($show->result() as $row) {
						if ($row->teacher_id == 2) {
							?>
				<!-- Start Body -->



				<div>Teacher ID: <?php echo $row->teacher_id; ?></div>
				<div>Teacher Type: <?php echo $row->type; ?></div>
				<div>Teacher Title: <?php echo $row->title; ?></div>
				<div>Teacher First Name: <?php echo $row->fname; ?></div>
				<div>Teacher Last Name: <?php echo $row->lname; ?></div>
				<div>Teacher Ability: <?php echo $row->ability; ?></div>
				<div>Teacher Adviser: <?php echo $row->adviser; ?></div>
				<div>Teacher Committee: <?php echo $row->committee; ?></div>


				<div>
					My name is <?php echo $row->title; ?><?php echo $row->fname; ?><?php echo $row->lname; ?>.
					I can <?php echo $row->ability; ?>
					and <?php echo $row->adviser; ?>.
					My student in Committee <?php echo $row->committee; ?>.
					My ID is <?php echo $row->teacher_id; ?>.
				</div>




				<!-- End Body -->
				<?php
						}
					}
				}
				?>
				<!-- End Get DB_value -->






























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









<!-- ==================== Original Show Databases ==================== -->
<!-- <?php
		if ($show->num_rows() > 0) {
			foreach ($show->result() as $row) {
				?>
				<?php echo $row->teacher_id; ?>
				<?php echo $row->type; ?>
				<?php echo $row->title; ?>
				<?php echo $row->fname; ?>
				<?php echo $row->lname; ?>
				<?php echo $row->ability; ?>
				<?php echo $row->adviser; ?>
				<?php echo $row->committee; ?>
				<?php
					}
				}
				?> -->