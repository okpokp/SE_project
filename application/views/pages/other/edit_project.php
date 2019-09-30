<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "สร้างโปรเจค(teacher)";

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

        .sty_pro {
            border-color: black;
            border-style: solid;
            margin-left: 15px;
        }

        .sty_member {
            border-color: black;
            border-style: solid;
            margin-right: 15px;
            padding-bottom: 30px;
        }
    </style>
    <title><?php echo $web ?></title>
</head>

<!--############################################## Header ###########################################################################-->
<header style="height: 13%">
	<div id='ui_main'></div>
</header>

<!--############################################## Body ###########################################################################-->

<body>
    <?php $teacher_id = 1;
    $error = 0;
    $show_std = $show[0];
    $show_err = $show[1];
    $error = $show_err['error'];
    // echo $show_err['error'];
    // print_r($show_err);
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
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert'>
                        <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                        </div>";
                    }
                    ?>
                    <form action="<?= base_url('Controller/register') ?>" method='post'>
                        <input name="teacher_id" value="<?php echo rand(1,6) ?>" style="display: none"> <!-- SEND DATA 'teacher_id' TO CONTROLLER -->
                        <!-- <input type='text' name='teacher_teacher_id' value='' placeholder='teacher_teacher_id'> -->
                        <div class="row">
                            <div class="col table table-bordered table-striped " ">
                                <br>
                                <p style=" font-size:20px;"><b>ชื่อ project</b></p>
                                <input type='text' name='name_project' class="form-control" value='' placeholder='name_project'>
                                <p style="font-size:20px;"><b>รายละเอียด project</b></p>
                                <input type='text' name='info_project' class="form-control" value='' placeholder='info_project'>

                            </div>
                           
                        </div>
                        <div class="container" style="text-align:center;">
                            <br>
                            <button name='submit' class="btn colora" value='create_group'>ยืนยัน</button>
                            <!-- <button name='submit' class="btn colora " value='edit_group'>แก้ไข</button> -->
                        </div>
                    </form>
                    <!-- <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..">
								<option value="1">Option 1</option>
								</select> -->
                    <!-- <table id="myTable" style="display: none;"> -->
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

<!-- #################################################################################################################### -->
<!-- #################################################################################################################### -->
<!-- ###############################################       SCRIPT       ################################################# -->
<!-- #################################################################################################################### -->
<!-- #################################################################################################################### -->
<style>
    * {
        box-sizing: border-box;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>

