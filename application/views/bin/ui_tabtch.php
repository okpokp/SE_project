<!DOCTYPE html>
<!-- 
-> ROOT
index
home_std

-> TEACHER
T home_tch
T create_group
T show_commit_tch
T sel_commit_tch
T test_score

-> OTHER
O test_room
O commit_show

-> ADMIN
A log_score
A control_room
A home_admin
A commit_result
A importdata_admin

-->
<?php $h = "60px"; ?>
<?php $w = "60px"; ?>
<!-- <a href="<?= base_url('Controller/home_std') ?>"> root_home_student -->
    <!-- <img src="<?= base_url('./image/img_home.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
<!-- </a><br> -->
<a href="<?= base_url('Controller/home_tch') ?>"> ประกาศ
    <!-- <img src="<?= base_url('./image/img_home.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/create_group') ?>"> สร้างกลุ่ม
    <!-- <img src="<?= base_url('./image/create_group.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/show_adviser_tch') ?>"> ที่ปรึกษา
    <!-- <img src="<?= base_url('./image/adviser.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/sel_commit_tch') ?>"> เลือกกรรมการ
    <!-- <img src="<?= base_url('./image/committee.jpg') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/test_score') ?>"> ให้คะแนน
    <!-- <img src="<?= base_url('./image/score.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/test_room') ?>"> ผลจัดห้องสอบ(ส่วนรวม)
    <!-- <img src="<?= base_url('./image/exams.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/commit_show') ?>"> กรรมการ(ส่วนรวม)
    <!-- <img src="<?= base_url('./image/result_com.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>

<!-- #################################################################################################################### -->
<!-- #################################################################################################################### -->
<!-- ###############################################       ADMIN       ################################################## -->
<!-- #################################################################################################################### -->
<!-- #################################################################################################################### -->
<a href="<?= base_url('Controller/control_room') ?>"> จัดห้องสอบ(admin)
    <!-- <img src="<?= base_url('./image/exams.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/home_admin') ?>"> ประกาศ (admin)
    <!-- <img src="<?= base_url('./image/img_home.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/commit_result') ?>"> ผลการเลือกกรรมการ(admin)
    <!-- <img src="<?= base_url('./image/last_com.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>
<a href="<?= base_url('Controller/importdata_admin') ?>"> นำข้อมูลเข้า(admin)
    <!-- <img src="<?= base_url('./image/importdata_admin.png') ?>" class="img-circle" height="65" width="65" alt="Avatar"> -->
</a><br>