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
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4" style="text-align: center;">
								<label ><h1>อัปโหลดรูปลายเซ็น</h1></label>
								<label><h2>(Photo File)</h2> </label>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<!--//////////////////////////////////////////////////-->
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="col-sm-3">
											<a class="btn btn-warning">Choose File</a> No file choose<br>
											<a class="btn btn-primary" id="addBtn">Upload File</a>
										</div>
										<div class="col-sm-4"></div>
										<div class="col-sm-3"></div>
									</div>
								</div>
								<!--//////////////////////////////////////////////////-->
								<div class="w3-panel w3-orange panel panel-primary" style='padding: 10px'>
									<table class="table table-bordered">
										<thead class="w3-orange">
											<tr>
												<div class="col-sm-4">
													<th>
													<ul class="list-inline">
														<li>No</li>
													</ul>
												</th>
												</div>
												<!-- no -->
												<div class="col-sm-4">
													<th>
													<ul class="list-inline">
														<li>Upload on ( Date / Month / Year Time )</li>
													</ul>
												</th>
												</div>
												<!-- Upload on ( Date / Month / Year Time ) -->
												<div class="col-sm-4">
													<th>
													<ul class="list-inline">
														<li>File</li>
													</ul>
												</th>
												</div>
												<!-- File -->
											</tr>
										</thead>
										<tbody style='background-color: white'>
											<tr>
												<th>1</th>
												<th>Upload on 04/08/2019 22:28:54</th>
												<th><a href="#" >Download</th>
											</tr>
											<tr>
												<th>2</th>
												<th>Upload on 04/08/2019 22:28:54</th>
												<th><a href="#" >Download</th>
											</tr>
										</tbody>
									</table>
								</div>
							<div class="col-sm-1"></div>
						</div>
						</div>
				</form>

		</div>
		</div>
	</div>
</body>
<!--#### Footer ####-->

<footer>
	<div id='ui_footer'></div>
</footer>
<!--### End #-->
<script>
		$(function() {
				$("a#addBtn").click(function() {
						var markup = " <tr><td class=\"text center\"><b>"+ "3" +"</b></td> \
																<td class=\"text center\"><b>" +"	Upload on 04/08/2019 22:28:54"+ " </b></td> \
																<td class=\"text center\"><a href=\"#\" ><b>" + "Download" + "</b></td></tr> \
														";
						$("table tbody").append(markup);
				})
		});
</script>
</html>

<!-- ==================== Insert Picture ==================== -->
