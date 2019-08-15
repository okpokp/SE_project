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
			$('#ui_tab').load('<?= base_url('Controller/ui_tab') ?>');
		})
	</script>
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
				<div style="background-color: orange; padding: 10px">
					<h2>หน้าหลัก</h2>
				</div>
				<!-- Body -->






















				<?php
				$a = array("นาย จิรพัชร์ เหลืองรุ่งเกียรติ", "นายอติวิชญ์ ม่วงศร", "นายเจตพล บุญลอย", "นางสาวกนิษฐา พุ่มผล", "นางสาวสวรรยา แสงบัวเผื่อน");
				$count_proj = rand(2, 10);
				// $r = array_rand($a, $count_proj);
				$r = rand(0, 4);
				$r_n = $r + 1;
				for ($i = 0; $i < $count_proj; $i++) {
					echo "
				<a style='color: green' href='";
					echo base_url('Controller/view_proj');
					echo "'>				
					<div>P$r_n...$a[$r]</div>
				</a>";
					$r = rand(0, 4);
					$r_n = $r + 1;
				}
				?>



































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

















<!-- ==================== Insert Picture ==================== -->

<!-- <?php
		$a = array("นาย จิรพัชร์ เหลืองรุ่งเกียรติ", "นายอติวิชญ์ ม่วงศร", "นายเจตพล บุญลอย", "นางสาวกนิษฐา พุ่มผล", "นางสาวสวรรยา แสงบัวเผื่อน");
		$count_proj = rand(2, 10);
		// $r = array_rand($a, $count_proj);
		$r = rand(0, 4);
		$r_n = $r + 1;
		for ($i = 0; $i < $count_proj; $i++) {
			echo "
				<button><a href='";
			echo base_url('Controller/view_proj');
			echo "'><div>
					<img style='height: 10px' 
					src=";
			echo base_url('src/b.png');
			$r = rand(0, 4);
			$r_n = $r + 1;
			echo "></div>					
					<div>$a[$r]</div>
					<div>P$r_n</div>
				</a></button>";
		}
		?> -->