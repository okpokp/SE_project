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
	$student_id = 1; // INPUT WHO TEACHER LOGIN
	$show_grp = $show[0];
	$show_std = $show[1];
	$show_tch = $show[2];
	$group_ids = [];
	$info_projects=[];
	$name_projects = [];
	$teacher_ids = [];
	$student_id_1s = [];
	$student_id_2s = [];
	$student_id_3s = [];
	$fname = "";
	$lname = "";
	$fname_tch = "";
	$lname_tch = "";
	foreach ($show_grp->result() as $row_grp) {
		array_push($group_ids, $row_grp->group_id);
		array_push($name_projects, $row_grp->name_project);
		array_push($info_projects, $row_grp->info_project);
		array_push($teacher_ids, $row_grp->teacher_teacher_id);
		array_push($student_id_1s, $row_grp->student_student_id_1);
		array_push($student_id_2s, $row_grp->student_student_id_2);
		array_push($student_id_3s, $row_grp->student_student_id_3);
	}
	$data = array_map(null, $group_ids, $name_projects,$info_projects, $teacher_ids, $student_id_1s, $student_id_2s, $student_id_3s);
	// echo "<pre>";
	// print_r($data);
	// echo $data[8][3];
	// $VAR[GROUP][MODE] 
	// 0 -> ID, 
	// 1 -> NAME PROJECTM, 
	// 2 -> Info Project,
	// 3 -> TEACHER ID, 
	// 4 -> STUDENT ID #1, 
	// 5 -> STUDENT ID #2, 
	// 6 -> STUDENT ID #3



														
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


										<?php for ($i = 0; $i < sizeof($data); $i++) {
												if ($student_id == $data[$i][4]) {
													?>
													<tr>
														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">ชื่อโปรเจค</td>
															<td><?php echo $data[$i][1] ?></td>
														</tr>
														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">ชื่อถาษาอังกฤษ</td>
															<td>Project Name</td>
														</tr>
														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">สมาชิก</td>
															<td><table>
																<!-- <tr><td>ชื่อสมาชิก</td></tr> -->
																<?php
																		foreach ($show_std->result() as $row_std) {
																			if ($row_std->student_id == $data[$i][4]) {
																				echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>" ;
																			} else if ($row_std->student_id == $data[$i][5]) {
																				echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>" ;
																			} else if ($row_std->student_id == $data[$i][6]) {
																				echo  $row_std->title . " " . $row_std->fname . " " . $row_std->lname . "<br>";
																			}
																		}
																		?>
															</table></td>
														</tr>
														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">ที่ปรึกษา</td>
															<td><table>
																
																<?php
																		foreach ($show_tch->result() as $row_tch) {
																			if ($row_tch->teacher_id == $data[$i][3]) {
																				echo  $row_tch->title . " " . $row_tch->fname . " " . $row_tch->lname . "<br>" ;
																			}
																		}
																		?>
															</table></td>
														</tr>

														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">กรรมการ</td>
															<td><---wait--->
																
															</td>
														</tr>

														<tr class="success">
															<td class="h_table colora" style="background-color: #7C0000 ">รายละเอียดโปรเจค</td>
															<td><table>
																
																<?php echo $data[$i][2]
																		?>
															</table></td>
														</tr>
													</tr>	
											<?php }
											} ?>
										
							</table>
								<div>
									<button class="btn btn-success positionin " style="margin-top: 20px ">แก้ไข</button>
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

