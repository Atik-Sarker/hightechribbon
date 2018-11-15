<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jul 2018 04:27:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hitech Ribbon | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backEnd')}}/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/backEnd')}}/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  
  <!-- custom css -->
  <link rel="stylesheet" href="{{asset('public/backEnd')}}/css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="http://hightechribbon.com/"><b>Hightech</b>Ribbon</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body login-custom">
      <p class="login-box-msg">Give your valid email and password</p>

      <form action="{{url('login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
           @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" name="password">

          @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('public/backEnd')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backEnd')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="{{asset('public/backEnd')}}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>

<!-- Mirrored from adminlte.io/themes/dev/AdminLTE/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jul 2018 04:27:00 GMT -->
</html>
