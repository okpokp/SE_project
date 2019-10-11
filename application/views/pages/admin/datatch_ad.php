<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "ข้อมูลนิสิต";

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
					<form action="<?= base_url('Controller/datatch_ad') ?>" method='post'>
						<div class="row">
							<div class="col-sm-4"></div>
							<!-- ///////////////////////////////////////////////// -->
							<div class="col-sm-4" style="text-align: center;">
								<label>
									<h1 style="color:black;">ปีการศึกษา</h1> <input type="text">
								</label>
								<!-- <label><h2>นำข้อมูลเข้านิสิต</h2> </label> -->
							</div>
							<div class="col-sm-4"></div>
						</div>
						<!--//////////////////////////////////////////////////-->
						<div class="row">
              <table class="table table-bordered table-striped well">
                <thead>
                  <tr>
										<th><center>ID</center></th>
                    <th><center>คำนำหน้า</center></th>
                    <th><center>ชื่อ</center></th>
										<th><center>นามสกุล</center></th>
                    <th><center>ความถนัด</center></th>
                    <th><center>Email</center></th>
                    <!-- <th><center>Edit</center></th>
                    <th><center>Delete</center></th> -->
                  </tr>
                </thead>
                <tbody>
    							<?php
    							$count = 0;
                  $title=array();
    							$fname = array();
    							$lname= array();
    							$ability = array();
    							$email = array();
									$primary = array();
    							foreach ($show->result() as $row)
    							{
                      array_push($title,$row->title);
    									array_push($fname, $row->fname);
    									array_push($lname, $row->lname);
    									array_push($ability, $row->ability);
    									array_push($email, $row->email);
											array_push($primary, $row->teacher_id);
    									$count++;
    									// echo $row->fname;
    							}

    							for ($i = 0; $i < $count; $i++)
    							{

    									echo "<tr>
													<td>
														" . $primary[$i] . "
													</td>
                          <td>
                            " . $title[$i] . "
                          </td>
    											<td>
    													" . $fname[$i] ."
    											</td>
													<td>
    												". $lname[$i]."
    											</td>
    											<td>
    												" . $ability[$i] . "
    											</td>
    											<td>
    													" . $email[$i] . "
    											</td>
                          <!--td>
    													<button type='submit' class='btn-primary' name='up' value='".$primary[$i]."' >Edit</button>
    											</td-->
                          <!--td>
    													<button class='btn-danger' >Delete</button>
    											</td-->
    									</tr>";
    							}
    							?>
                </tbody>
              </table>
							<table class="table table-bordered table-striped well">
								<thead>
									<tr>
										<th><center>ID</center></th>
										<th><center>คำนำหน้า</center></th>
										<th><center>ชื่อ</center></th>
										<th><center>นามสกุล</center></th>
										<th><center>ความถนัด</center></th>
										<th><center>Email</center></th>
										<th><center>Edit</center></th>
										<th><center>Delete</center></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type='text' name='ID' value='' >
										</td>
										<td>
											<input type='text' name='titleso' value='' >
										</td>
										<td>
											<input type='text' name='fnameso' value='' >
										</td>
										<td>
											<input type='text' name='lnameso' value='' >
										</td>
										<td>
											<input type='text' name='abilityso' value='' >
										</td>
										<td>
											<input type='text' name='emailso' value='' >
										</td>
										<td>
											<button type='submit' class='btn-primary' name='up' value='up' >Edit</button>
										</td>
										<td>
											<button type='submit' class='btn-danger' name='del' value='del' >Delete</button>
										</td>

									</tr>
								</tdbody>
							</table>

						</div>

<!-- <?php
echo $count;
foreach ($show->result() as $row)
{
   echo $row->teacher_id;
}
?> -->
					</form>
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
