<?php if($this->session->flashdata('user_registered')) : ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Congratulation!</strong>
        <?= $this->session->flashdata('user_registered') ?>
    </div>
<?php endif ?>

<?php if($this->session->flashdata('login_success')) : ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Welcome back</strong>
        <?= $this->session->flashdata('login_success') ?>
    </div>
<?php endif ?>

<?php if($this->session->flashdata('logout_success')) : ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong>
        <?= $this->session->flashdata('logout_success') ?>
    </div>
<?php endif ?>

<?php if($this->session->flashdata('post_created')) : ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong>
        <?= $this->session->flashdata('post_created') ?>
    </div>
<?php endif ?>

<?php if($this->session->flashdata('post_deleted')) : ?>
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Well done!</strong>
        <?= $this->session->flashdata('post_deleted') ?>
    </div>
<?php endif ?>