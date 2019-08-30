<!DOCTYPE html>
<html lang="en">
<head>
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
            $('#ui_main').load('<?=base_url('Controller/ui_main')?>');
            $('#ui_footer').load('<?=base_url('Controller/ui_footer')?>');
            $('#ui_tab').load('<?=base_url('Controller/ui_tabtch')?>');
        })
    </script>

   <style>
    .center {
            margin: auto;
            width: 100%;
            padding: 10px;

            }
    .text-cen {
        text-align: center;
    }

   </style>
</head>

<header>
    <div id='ui_main'></div>
</header>
<body>

<div class="container-fluid text-center">

        <div class="row">
            <!-- Bar -->
            <div class="col-sm-2 well colora" style=" margin-top: 10px;">
                <div id='ui_tab'></div>
                </div>
            <!-- End Bar -->

            <div class="col-sm-10 well swhite text-left size bgimg">
              <div class="colora" style=" padding: 10px">
                  <h2>ปรับเกณฑ์คะแนน</h2>
              </div>
                <div style="background-color: white; padding: 10px">

                </div>
                <br><br>

                <div class="center">
                    <div class="form-group">
                        <label  class="col-sm-6 ">น้ำหนักคะแนนเล่มโครงงาน</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="0.5" class="text-cen" >
                            </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label  class="col-sm-6 ">น้ำหนักคะแนนความรู้โครงงาน</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="0.5" class="text-cen" >
                            </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label  class="col-sm-6 ">น้ำหนักความสมบูรณ์ชิ้นงาน</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="0.5" class="text-cen">
                            </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label  class="col-sm-6 ">น้ำหนักการนำเสนอ</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="0.5" class="text-cen">
                            </div>
                    </div>

                        <br><br><br>


                    <button class="btn colora" >ยืนยัน</button>

                </div>















                </div>
            </div>
        </div>

</body>

<footer>
    <div id='ui_footer'></div>
</footer>
</html>
