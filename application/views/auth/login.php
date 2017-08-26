<!-- /.login-logo -->
<div class="login-box-body">
  <p class="login-box-msg">Sign in to start your session</p>
  <?php if($this->session->flashdata('message') != null):?>
    <div class="col-md-3 col-centered alert alert-<?= $this->session->flashdata('status') ?>" role="alert">
      <?= $this->session->flashdata('message') ?>
    </div>
  <?php endif; ?>
  <form action="<?= site_url('auth/do_login') ?>" method="post">
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
  </form>

  <a href="<?= site_url('auth/register') ?>" class="text-center">Register a new membership</a>

</div>
<!-- /.login-box-body -->