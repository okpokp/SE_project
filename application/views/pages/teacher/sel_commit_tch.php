<!DOCTYPE html>
<html lang='en' dir='ltr'>

<?php
$web = "KUCPE";
$topic = "เลือกเป็นกรรมการ(teacher)";

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
    $group_ids = array();
    $name_projects = array();
    foreach ($show->result() as $row) {
        array_push($group_ids, $row->group_id);
        array_push($name_projects, $row->name_project);
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
                    <!-- Body -->
                    <form action="<?= base_url('Controller/cal_sel_commit_tch') ?>" method='post'>
                        <table class='table table-bordered table-striped'>
                            <thead>
                                <tr>
                                    <th>
                                        <center>กลุ่มที่</center>
                                    </th>
                                    <th>
                                        <center>ชื่อ project</center>
                                    </th>
                                    <th>
                                        <center>ต้องการเป็นกรรมการอันดับที่</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < sizeof($group_ids); $i++) {
                                    echo "<tr>
                                    <td class='colora'>$group_ids[$i]</td>
                                    <td>$name_projects[$i]</td>
                                    <td><input list='browsers' name='student_student_id_1' class='form-control' value=''></td>
                                    </tr>";
                                } ?>
                            </tbody>
                        </table>
                        <datalist id="browsers">
                            <?php for ($i = 1; $i <= sizeof($group_ids); $i++) {
                                echo "<tr>
                                        <td>'<option>$i</option>' ?></td>
                                    </tr>";
                            }
                            ?>
                        </datalist>
                        <div>
                            <br>
                            <button name='submit' class="btn colora" value='create_group'>ยืนยัน</button>
                        </div>
                    </form>
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