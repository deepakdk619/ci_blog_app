<div class="container mt-5 w-25">

<?php if($this->session->flashdata('login_failed')) : ?>
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong>
			<?= $this->session->flashdata('login_failed') ?>
		</div>
	<?php endif ?>
<?= form_open('users/login') ?>
  <fieldset>
    <legend>Log In</legend>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="email" aria-describedby="emailHelp" placeholder="Enter email" >
      <div class="invalid-feedback"><?= form_error('email') ?></div>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="password" placeholder="Password">
      <div class="invalid-feedback"><?= form_error('password') ?></div>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="submit">Login</button>
  </fieldset>
</form>
</div>