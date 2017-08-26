<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?> | Digicoin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= css_url('bootstrap.min') ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= css_url('font-awesome.min') ?>" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= css_url('ionicons.min') ?>" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= css_url('AdminLTE') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= libraries_url('iCheck/square/blue.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= site_url(); ?>"><b>Digicoin</b> | Finhacks 2017</a>
  </div>
  <?= $content ?>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?= libraries_url('jQuery/jquery-2.2.3.min.js') ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= js_url('bootstrap.min') ?>"></script>
<!-- iCheck -->
<script src="<?= libraries_url('iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
