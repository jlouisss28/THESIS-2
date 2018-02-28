<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Business Manager | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="businessManagerModule/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="businessManagerModule/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="businessManagerModule/bower_components/Ionicons/css/;ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="businessManagerModule/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="businessManagerModule/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <b>Assumption Medical and Diagnostic Center</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <center><img src="businessManagerModule/dist/img/user3-128x128.png" alt="User Image" style="width:160px;height:160px;"></center>
    <p class="login-box-msg">Sign in to start your session</p>

    <form name="form1" method="post" action="login.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <center><font color="red"><p>Username or Password Incorrect</p></font></center>
      <div class="row" style="display: flex; align-items: center; justify-content: center;">
        <!-- /.col -->

        <div class="col-xs-4">
          <button type="submit" name="S1" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <center><a type="submit"  data-toggle="modal" data-target="#modal-info" ><u>I forgot my password</u></a><br></center>
      
                        <div class="modal fade" id="modal-info">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <div class="margin">
                                            <h3>Forgot Password</h3>
                                          </div>
                                      </div>
                                        <!-- end of modal header -->
                                      <div class="modal-body">
                                        <div class="box-body">
                                           
                                            <div class="form-group">
                                                  <label for="exampleInputEmail1">Username</label>
                                                  <input type="email" class="form-control" placeholder="Enter Username  ">
                                                </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Next</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!-- MODAL ------>
                                          <div class="modal fade" id="modal-default">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                                                <div class="margin">
                                                    <h3>Forgot Password</h3>
                                                  </div>
                                              </div>
                                                <!-- end of modal header -->
                                              <div class="modal-body">
                                                <div class="box-body">

                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Enter New Password</label>
                                                          <input type="email" class="form-control">
                                                        </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Confirm New Password</label>
                                                          <input type="email" class="form-control">
                                                        </div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Security Question: Who is you favorite superhero?</label>
                                                          <input type="email" class="form-control" placeholder="Answer">
                                                        </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-warning">Change Password</button>
                                              </div>
                                            </div>
                                            <!-- /.modal-content --> 
                                          </div>
                                          <!-- /.modal-dialog -->
                                        </div>
                                <!-- MODAL -->
                                    <div class="modal fade" id="modal-warning">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                  </div>
                                  <div class="modal-body">
                                    <h4>New Password Saved!</h4>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="businessManagerModule/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="businessManagerModule/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="businessManagerModule/plugins/iCheck/icheck.min.js"></script>
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