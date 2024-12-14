<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>تسجيل الدخول</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/admin/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}" rel="stylesheet">

  <style>
    /* Body styling */
    body {
      background: linear-gradient(135deg, #1e3c72, #2a5298); /* تدرج لوني حديث */
      font-family: 'Source Sans Pro', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
    }

    /* Login Box */
    .login-box {
      width: 400px;
    }

    /* Card Styling */
    .card {
      background: rgba(255, 255, 255, 0.9); /* نصف شفاف */
      border-radius: 15px; /* حواف ناعمة */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* ظل عميق */
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px); /* حركة بسيطة عند التمرير */
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3); /* زيادة الظل */
    }

    /* Header */
    .login-header {
      background: linear-gradient(135deg, #2a5298, #1e3c72);
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 24px;
      font-weight: bold;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    }

    /* Login Card Body */
    .login-card-body {
      padding: 30px;
    }

    .login-card-body .login-box-msg {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      margin-bottom: 25px;
      text-align: center;
    }

    /* Form Inputs */
    .form-control {
      border-radius: 25px;
      height: 50px;
      padding: 10px 20px;
      border: 1px solid #ccc;
      box-shadow: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
      border-color: #1e3c72;
      box-shadow: 0 0 5px rgba(30, 60, 114, 0.5);
    }

    .input-group-text {
      border-radius: 25px;
      background: #f4f4f4;
      border: none;
    }

    /* Button */
    .btn-primary {
      background: linear-gradient(135deg, #2a5298, #1e3c72);
      border: none;
      border-radius: 25px;
      font-size: 16px;
      font-weight: bold;
      height: 50px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      transform: translateY(-2px);
    }

    /* Footer Text */
    .login-footer {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #666;
    }

    .login-footer a {
      color: #1e3c72;
      text-decoration: none;
    }

    .login-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
<div class="login-box">
  <div class="card">
    <div class="login-header">
      تسجيل الدخول
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">مرحباً بك! الرجاء تسجيل الدخول للوصول إلى حسابك</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="اسم المستخدم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">تسجيل الدخول</button>
          </div>
        </div>
      </form>
    </div>
   {{--  <div class="login-footer">
      <p>نسيت كلمة المرور؟ <a href="#">اضغط هنا</a></p>
    </div> --}}
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
