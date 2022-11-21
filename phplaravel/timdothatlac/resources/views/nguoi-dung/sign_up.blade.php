<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.9.1
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <title>ĐĂNG NHẬP</title>
    <style>
        .login{
           
            margin: 15% auto ;
            text-align: center;
        }
        .content{
            margin: 1.5% auto 35%;
            padding: 5%;  
            text-align: left;
            font-size: large;
        }
        
    </style>
</head>

<body>
    <div class="login">
        <h1>ĐĂNG NHẬP</h1>
        <form action=" {{route('dang-ky')}}" method="post">
        @csrf
            <table class="content">
                <tr>
                    <td>Tên đăng nhập:    </td>
                    <td><input type="text" class="input-group mb-3" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu:    </td>
                    <td><input type="password" class="input-group mb-3" name="password"></td>
                </tr>
                <tr>
                    <td>Xác nhận mật khẩu:    </td>
                    <td><input type="password" class="input-group mb-3" name="confirm_password"></td>
                </tr>
                <tr>
                    <td>Email:    </td>
                    <td><input type="email" class="input-group mb-3" name="email"></td>
                </tr>
                <tr>
                    <td>SĐT:   </td>
                    <td><input type="text" class="input-group mb-3" name="sdt"></td>
                </tr>
                <tr>
                    <td>Birthday:    </td>
                    <td><input type="date" class="input-group mb-3" name="birthday"></td>
                </tr>
                <tr>
                    <td>Address:    </td>
                    <td><input type="text" class="input-group mb-3" name="address"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn-get-started scrollto">Đăng ký</button></td>
                </tr>
            </table>
        </form>
        
    </div>
</body>

</html>