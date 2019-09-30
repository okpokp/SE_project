<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "กลุ่มของฉัน(other)";

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
	<title><?php echo $web ?></title>
</head>

<!--############################################## Header ###########################################################################-->
<header style="height: 12.7vh">
	<div id='ui_main'></div>
</header>

<!--############################################## Body ###########################################################################-->

<body>
	<?php
	// echo "<pre>";print_r($show_com[0];
	$show_grp = $show_com[0];
	$show_std = $show_com[1];
	$show_tch = $show_com[2];
	$student_ids = array();
	foreach ($show_grp->result() as $row_grp) {
		$group_id = $row_grp->group_id;
		$name_project = $row_grp->name_project;
		$info_project = $row_grp->info_project;
		$teacher_id = $row_grp->teacher_teacher_id;
		array_push($student_ids, $row_grp->student_student_id_1);
		array_push($student_ids, $row_grp->student_student_id_2);
		array_push($student_ids, $row_grp->student_student_id_3);
	}
	?>
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
					<div class="form-row">
						<div class="col-sm-6">
							<?php
								echo "<div>
								<table class='table table-bordered table-striped'>
									<tbody>
										<tr>
											<td class='colora'>ชื่อโปรเจค</td>
											<td>$name_project</td>
										</tr>
										<tr>
											<td class='colora'>ชื่อภาษาอังกฤษ</td>
											<td>$name_project</td>
										</tr>
								</table>
								<table class='table table-bordered table-striped'>
									<tbody>
										<tr>
											<td class='colora'>ที่ปรึกษา</td>
											<td>$teacher_id</td>
											<td>def@somemail.com</td>
										</tr>
										<tr>
											<td class='colora'>กรรมการ</td>
											<td>Defaultson</td>
											<td>def@somemail.com</td>
										</tr>
										<tr>
											<td class='colora'>สมาชิก</td>
											<td>$student_ids[0]</td>
											<td>def@somemail.com</td>
										</tr>
										<tr>
											<td class='colora'>สมาชิก</td>
											<td>$student_ids[1]</td>
											<td>def@somemail.com</td>
										</tr>
										<tr>
											<td class='colora'>สมาชิก</td>
											<td>$student_ids[2]</td>
											<td>def@somemail.com</td>
										</tr>
									</tbody>
								</table>
								</div>
								<div>
									<label class='colora' style='padding: 10px'>Info Project</label>
									<table class='table table-bordered table-striped' style='margin-top:0px'>
										<tbody>
											<tr style='height: 100px'>
												<td>Defaultson</td>
											</tr>
									</table>
								</div>
								<button class='btn colora'>แก้ไข</button>";
							?>
						</div>
					</div>
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