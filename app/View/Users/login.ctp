
<h2 class="font-weight-light">LOGIN</h2>
<?php echo $this->Form->create('User',array('class'=>'pt-3')); ?>
  <div class="form-group">
   <?php //echo $this->Form->input('email', array('class' => 'form-control form-control-lg','placeholder'=>'Email'));?>
   <?php echo $this->Form->input('username', array('class' => 'form-control form-control-lg','placeholder'=>'Username'));?>
   
  </div>
  <div class="form-group">
  <?php echo $this->Form->input('password', array('class' => 'form-control form-control-lg','placeholder'=>'Password'));?>
   
  </div>
  <div class="mt-3">
   <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Submit</button>
    <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="login">LOGIN</a>-->
  </div>
  <div class="my-2 d-flex justify-content-between align-items-center">
    <div class="form-check">
      <label class="form-check-label text-muted">
        <input type="checkbox" class="form-check-input">
        Keep me logged in
      </label>
    </div>
    <a href="#" class="auth-link text-black">Forgot password?</a>
  </div>
  <div class="mb-2">
    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
      <i class="ti-facebook mr-2"></i>Connect using facebook
    </button>
  </div>
  <div class="text-center mt-4 font-weight-light">
    Don't have an account? <a href="register.html" class="text-primary">Create</a>
  </div>
</form>
