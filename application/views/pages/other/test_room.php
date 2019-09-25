<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "ผลจัดห้องสอบ(other)";

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
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>เวลา</th>
                            <th>ห้อง 1</th>
                            <th>ห้อง 2</th>
                            <th>ห้อง 3</th>
                        </tr>
                        <?php
                        $count = 0;
                        $teacher = array();
                        foreach ($show->result() as $row) {
                            array_push($teacher, $row->fname);
                            $count++;
                            // echo $row->fname;
                        }
                        for ($i = 0; $i < $count; $i++) {
                            $s = $i + 9;
                            $c = $i;
                            if ($c >= sizeof($teacher) - 2) {
                                $c = sizeof($teacher) - (sizeof($teacher) - 2);
                            }
                            echo "<tr>
                                <td>
                                    $s.00 AM.
                                </td>
                                <td>
                                    " . $teacher[$c] . "
                                </td>
                                <td>
                                    " . $teacher[$c + 1] . "
                                </td>
                                <td>
                                    " . $teacher[$c + 2] . "
                                </td>
                            </tr>";
                        }
                        ?>
                    </table>
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

<!-- <?php
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
        ?> -->