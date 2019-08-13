<!DOCTYPE html>
<html lang='en' dir='ltr'>

<!--############################################## Head ###########################################################################-->

<head>
	<!--Load style.css file, which store in css folder.-->
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
	<div class='container_right_header'>
		<div>
			<h1>Teacher Info</h1>
		</div>
	</div>
	<div class='container_right'>





























		<div>Info</div>
		<div>
			<input style='height: 150px; width: 100%;text-align: left;' value='Description is the pattern of narrative development that aims to make vivid a place, object,character, or group.[1] Description is one of four rhetorical modes (also known as modes of discourse),along with exposition, argumentation, and narration.[2] In practice it would be difficult to write literature that drew on just one of the four basic modes.[3]'>
		</div>
		<div></div>
		<div></div>















		<div>Maximum Student Comsultance</div>
		<div><input type='number' style='text-align: left;' value='2'></div>
		<div></div>
		<div></div>
















		<div><button class='btn btn-danger' value='2'>Reset</button></div>
		<div></div>
		<div></div>
		<div></div>
















		<div><button class='btn btn-success' value='2'>Accept</button></div>
		<div></div>
		<div></div>
		<div></div>



























	</div>
</body>
<!--############################################## Footer ###########################################################################-->
<footer>
	<div id='ui_footer'></div>
</footer>
<!--############################################## End ###########################################################################-->

</html>












<style>
	.container_right {
		grid-template-columns: 20vh 120vh var(--main_template_columns) var(--main_template_columns);
	}
</style>