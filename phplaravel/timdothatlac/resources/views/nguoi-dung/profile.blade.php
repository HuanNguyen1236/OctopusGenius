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
        <h1 class="text-light"><a href="{{route('trang-chu')}}"><span>Ninestars</span></a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ route('trang-chu') }}">Trang chủ</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> -->
          <li><a class="nav-link scrollto" href="#services">Danh mục</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Bản tin</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
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
                  <img src="{{ asset('img/portfolio/portfolio-1.jpg')  }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$nguoiDung->ten_dang_nhap}}</h3>
              <ul>
                <li><strong>Họ và tên</strong>: {{$nguoiDung->ten_dang_nhap}}</li>
                <li><strong>Địa chỉ</strong>: {{$nguoiDung->dia_chi}}</li>
                <li><strong>Email:</strong>: <a href="#">{{$nguoiDung->email}}</a> <strong> SĐT</strong>: {{$nguoiDung->sdt}}</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
      
    </section><!-- End Portfolio Details Section -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($listPost as $post)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$post->loai_bai_post}}">
            <div class="portfolio-wrap">
            <img src="{{ asset('public/Image/'.$post->hinh_anh)  }}">
              <div class="portfolio-links">
                <a href="{{ asset('public/Image/'.$post->hinh_anh)  }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$post->tieu_de}}"><i class="bi bi-plus"></i></a>
                <a href="{{ route('chi-tiet-bai-dang',['id' => $post->id]) }}" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>{{$post->tieu_de}}</h4>
                <p>{{$post->email}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js')  }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')  }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')  }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')  }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')  }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')  }}"></script>

</body>

</html>