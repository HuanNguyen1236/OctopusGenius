<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Ninestars Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')  }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')  }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i')  }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="{{ asset('vendor/aos/aos.css')  }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')  }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')  }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css')  }}" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Chi tiết bản tin</span></a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ route('trang-chu') }}">Trang chủ</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
          <li><a class="nav-link scrollto" href="#services">Danh mục</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Bản tin</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Tìm kiếm</a></li>
          @if(Auth::id()==null)
          <li><a class="getstarted scrollto" href="{{ route('dang-nhap') }}">Đăng nhập</a></li> 
          @else
          <li><a class="getstarted scrollto" href="{{ route('dang-xuat') }}">Đăng xuất</a></li> 
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Portfolio Details</h2> -->
          <ol>
            <!-- <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li> -->
            <!-- <li>Portfolio Details</li> -->
            
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                
                <div class="swiper-slide">
                  <img src="{{ url('public/Image/'.$post->hinh_anh) }}"  width=50% height=40%>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" >
              <h1>{{$post->tieu_de}}</h3>
              <ul>
                <li><strong>Loại đô vật</strong>: {{$post->loaiDoVat->loai_do_vat}}</li>
                <li><strong>Địa chỉ</strong>: {{$post->dia_chi}}</li>
                
              </ul>
              <div class="portfolio-description">
              <h3>Thông tin kèm</h2>
              <p>
                {{$post->mo_ta}}
              </p>
            </div>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Liên hệ ngay</h4>
            <p>Hãy nhập những thắc của bạn ở đây</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Gửi">
            </form>
          </div>
        </div>
      </div>
    </div>

    

    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>