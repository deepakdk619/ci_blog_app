<div class="container mt-5 w-25">
<?= form_open('users/register') ?>
  <fieldset>
    <legend>Sign Up</legend>
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" name="full_name" class="form-control <?php echo form_error('full_name') ? 'is-invalid' : '' ?>" id="name"  placeholder="John Doe" >
      <div class="invalid-feedback"><?= form_error('full_name') ?></div>
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="email" aria-describedby="emailHelp" placeholder="Enter email" >
      <div class="invalid-feedback"><?= form_error('email') ?></div>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" id="password" placeholder="Password">
      <div class="invalid-feedback"><?= form_error('password') ?></div>
    </div>
    <div class="form-group">
      <label for="password_confirm">Confirm Password</label>
      <input type="password" name="password_confirm" class="form-control <?php echo form_error('password_confirm') ? 'is-invalid' : '' ?>" id="password_confirm" placeholder="Confirm your Password">
      <div class="invalid-feedback"><?= form_error('password_confirm') ?></div>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="register_form_submit">Signup</button>
  </fieldset>
</form>
</div>