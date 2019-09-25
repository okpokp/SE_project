<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "โปรเจคในที่ปรึกษา(teacher)";

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
	<?php
	$teacher_id = 3; // INPUT WHO TEACHER LOGIN
	$show_grp = $show[0];
	$show_std = $show[1];
	$group_ids = [];
	$name_projects = [];
	$teacher_ids = [];
	$student_id_1s = [];
	$student_id_2s = [];
	$student_id_3s = [];
	$fname = "";
	$lname = "";
	foreach ($show_grp->result() as $row_grp) {
		array_push($group_ids, $row_grp->group_id);
		array_push($name_projects, $row_grp->name_project);
		array_push($teacher_ids, $row_grp->teacher_teacher_id);
		array_push($student_id_1s, $row_grp->student_student_id_1);
		array_push($student_id_2s, $row_grp->student_student_id_2);
		array_push($student_id_3s, $row_grp->student_student_id_3);
	}
	$data = array_map(null, $group_ids, $name_projects, $teacher_ids, $student_id_1s, $student_id_2s, $student_id_3s);
	// echo "<pre>";
	// print_r($data);
	// echo $data[8][3];
	// $VAR[GROUP][MODE] 
	// 0 -> ID, 
	// 1 -> NAME PROJECTM, 
	// 2 -> TEACHER ID, 
	// 3 -> STUDENT ID #1, 
	// 4 -> STUDENT ID #2, 
	// 5 -> STUDENT ID #3
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
					<!-- Body -->
					<form class="needs-validation" novalidate>
						<div class="form-row">
							<div class="col-sm-6">
								<div>
									<table class="table table-bordered positionin">
										<tbody>
											<?php for ($i = 0; $i < sizeof($data); $i++) {
												if ($teacher_id == $data[$i][2]) {
													?>
													<tr>
														<td class="colora" style="width: 170px;"><?php echo $data[$i][1] ?></td>
														<td>
															<table>
																<!-- <tr><td>ชื่อสมาชิก</td></tr> -->
																<?php
																		foreach ($show_std->result() as $row_std) {
																			if ($row_std->student_id == $data[$i][3]) {
																				echo "<tr><td>" . $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "</td></tr>";
																			} else if ($row_std->student_id == $data[$i][4]) {
																				echo "<tr><td>" . $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "</td></tr>";
																			} else if ($row_std->student_id == $data[$i][5]) {
																				echo "<tr><td>" . $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "</td></tr>";
																			}
																		}
																		?>
															</table>
														</td>
													</tr>
											<?php }
											} ?>
										</tbody>
									</table>
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