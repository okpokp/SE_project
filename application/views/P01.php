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
				// echo "<pre>";print_r($show_com[0];
				$show_grp = $show_com[0];
				$show_std = $show_com[1];
				$show_tch = $show_com[2];
				foreach ($show_grp->result() as $row_grp) {
					?>
				<!-- Start Body -->

				<?php
					echo "
						<div>
						<h3>หัวข้อ</h3>
						</div>
						<div>";
					echo $row_grp->name_project;
					echo "</div>
						<div>
						<h3>รายละเอียด</h3>
						</div>
						<div>";
					echo $row_grp->info_project;
					echo "</div>
						<div>
						<h3>สมาชิก</h3>
				</div>
				<div>";
					foreach ($show_std->result() as $row_std) {
						if ($row_grp->student_student_id_1 == $row_std->student_id) {
							echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>";
						}
						if ($row_grp->student_student_id_2 == $row_std->student_id) {
							echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>";
						}
						if ($row_grp->student_student_id_3 == $row_std->student_id) {
							echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>";
						}
					}
					echo "</div>
						<div>
							<h3>อาจารย์ที่ปรึกษา</h3>
						</div>
						<div>
						";
					foreach ($show_tch->result() as $row_tch) {
						if ($row_grp->teacher_teacher_id == $row_tch->teacher_id) {
							echo $row_tch->title . " " . $row_tch->fname . " " . $row_tch->lname . "<br>";
						}
					}
					echo "</div>
				<div>
					<h3>กรรมการ</h3>
				</div>
				<div>
					-<br>
					-
				</div>
				<div>
					<h3>รายงาน</h3>
				</div>
				<div>
					<a href='#'>Document.doc</a>
				</div>";
					?>

				<!-- End Body -->
				<?php
					// }
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