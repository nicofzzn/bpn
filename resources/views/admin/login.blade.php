<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Focus - Bootstrap Admin Dashboard </title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('b//images/favicon.png')}}">
  <link href="{{url('b//css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
  <div class="authincation h-100">
    <div class="container-fluid h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <h4 class="text-center mb-4">Login Admin</h4>
                  <form action="/login" method="POST">
                    @csrf
                    @if (session('error'))
                    <h3>
                      {{ session('error') }}
                    </h3>
                    @endif
                    <div class="form-group">
                      <label><strong>Username</strong></label>
                      <input type="text" class="form-control" name="username" id="" required>
                    </div>
                    <div class="form-group">
                      <label><strong>Password</strong></label>
                      <input type="password" class="form-control" name="password" id="" required>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="{{url('b//vendor/global/global.min.js')}}"></script>
  <script src="{{url('b//js/quixnav-init.js')}}"></script>
  <script src="{{url('b//js/custom.min.js')}}"></script>

</body>

</html>