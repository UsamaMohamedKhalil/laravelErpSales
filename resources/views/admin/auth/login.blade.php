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
  <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}">
  <link href="{{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}" rel="stylesheet">

  <style>
    /* Body Styling */
    body {
      background-color: #ffffff; /* خلفية بيضاء */
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
      background: #ffffff; /* لون أبيض للكارد */
      border-radius: 15px; /* حواف ناعمة */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* ظل خفيف */
      overflow: hidden;
    }

    /* Logo Styling */
    .login-logo {
      text-align: center;
      margin: 20px 0;
    }

    .login-logo img {
      width: 100px; /* حجم الشعار */
      height: auto;
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
    .login-logo img {
    width: 150px; /* العرض */
    height: auto; /* للحفاظ على التناسب */
}fit: contain; /* للحفاظ على تناسب الصورة */
}
  </style>
</head>
<body>
<div class="login-box">
  <!-- Logo Section -->
  <div class="login-logo">
    <img src="{{ asset('assets/admin/imgs/logo.png') }}" alt="Logo"> <!-- استبدل المسار بمسار الشعار الخاص بك -->
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">مرحباً بك! الرجاء تسجيل الدخول للوصول إلى حسابك</p>
      <form action="{{route('admin.login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="اسم المستخدم">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
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
    <div class="login-footer">
      @error('username')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      @error('password')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
