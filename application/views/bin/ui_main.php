<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<div class='container_left'>
    <div style='line-height: 50px'>
        <div>
            <form action='<?= base_url('Controller/home') ?>' method='post'>
                <button class='btn btn-success'>
                    TEACHER FORM
                </button>
            </form>
        </div>
        <div>Atiwitch Moungsorn</div>
        <div>Level</div>
        <div>
            <form action='<?= base_url('Controller/info') ?>' method='post'>
                <button class='btn btn-success'>Info</button>
            </form>
        </div>
        <div>
            <form action='<?= base_url('Controller/consult') ?>' method='post'>
                <button class='btn btn-success'>Project Consultants</button>
            </form>
        </div>
        <div>
            <form action='<?= base_url('Controller/commit') ?>' method='post'>
                <button class='btn btn-success'>Project Committee</button>
            </form>
        </div>
        <div>
            <form action='<?= base_url('Controller/index') ?>' method='post'>
                <button class='btn btn-success'>Logout</button>
            </form>
        </div>
        <div>
            <form action='<?= base_url('Controller/db_user') ?>' method='post'>
                <button class='btn btn-success'>View db_user</button>
            </form>
        </div>
    </div>
</div>