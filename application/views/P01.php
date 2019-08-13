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
			<h1>Project Name</h1>
		</div>
	</div>
	<div class='container_right'>
















		<div>
			Description
		</div>
		<div>
			Description is the pattern of narrative development that aims to make vivid a place, object,
			character, or group.[1] Description is one of four rhetorical modes (also known as modes of discourse),
			along with exposition, argumentation, and narration.[2] In practice it would be difficult to write
			literature that drew on just one of the four basic modes.[3]
		</div>
		<div></div>
		<div></div>














		<div>Member</div>
		<div>
			<ul>
				<li>นาย จิรพัชร์ เหลืองรุ่งเกียรติ</li>
				<li>นาย เจตพล บุญลอย</li>
			</ul>
		</div>
		<div></div>
		<div></div>













		<div>Consultants</div>
		<div>
			<ul>
				<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
			</ul>
		</div>
		<div></div>
		<div></div>













		<div>Committee</div>
		<div>
			<ul>
				<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
				<li>อาจารย์ กาญจนา เอี่ยมสอาด</li>
			</ul>
		</div>
		<div></div>
		<div></div>















		<div>Document</div>
		<div>
			<a href='#'>Document.doc</a>
		</div>
		<div></div>
		<div></div>
















		<div>Illustration 1</div>
		<div><img src='<?php echo base_url('src/b.png'); ?>' class='crop_img'></div>
		<div></div>
		<div></div>



















		<div>Illustration 2</div>
		<div><img src='<?php echo base_url('src/a.jpg'); ?>' class='crop_img'></div>
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