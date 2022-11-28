<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Octopus Genius </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  * Template Name: Octopus Genius - v4.9.1
  * Template URL: https://bootstrapmade.com/Octopus Genius-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
<p></p>
    @if(Auth::id()==null)
    <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Octopus Genius</span></a></h1>
          @else 
          <div class="logo">
        <h1 class="text-light"><a href="{{ route('thong-tin-nguoi-dung',['id' => Auth::id()]) }}"><span></span>{{ $nguoiDung->ten_dang_nhap}}</a></h1>
          @endif
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('trang-chu') }}">Trang chủ</a></li>
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
          <li><a class="nav-link scrollto" href="#search">Đăng bài</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1> 
            <p>Bạn cần tìm gì đó ?</p>
            <p>Đã có Octopus genius </p>  
          </h1>
          <h2>Octopus Genius nơi bạn có thể tìm thứ bạn cần </h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Đăng tin ngay</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Lựa cho</h2>
          <p>Check out the great services we offer</p> -->
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""> Tin tìm đồ đã mất</a></h4>
               <p class="description">Nơi bạn có thể xem và giúp đỡ cho chính bạn và mọi người tìm lại đồ đã mất.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Tin đồ đã nhặt được</a></h4>
               <p class="description">Nơi mà bạn có thể xem được các đồ vật mà người khác đã nhặt được</p> 
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tin cảnh báo lừa đảo</a></h4>
              <p class="description">Thông báo về các vụ lừa đảo trên website hiện nay</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Liên hê</a></h4>
              <p class="description">Nơi để bạn liên hệ nếu có vấn đề thắc mắc</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Bản tin tìm đồ đã mất</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tất cả</li>
              <li data-filter=".filter-1">Căn cước công dân/Chứng minh nhân dân</li>
              <li data-filter=".filter-2">Giấp phép lái xe</li>
              <li data-filter=".filter-3">Bóp hoặc điện thoại</li>
              <li data-filter=".filter-4">Khác</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($listPost as $post)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$post->loai_bai_post}}">
            <div class="portfolio-wrap">
            <img src="{{ url('public/Image/'.$post->hinh_anh) }}">
              <div class="portfolio-links">
                <a href="{{ url('public/Image/'.$post->hinh_anh) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$post->tieu_de}}"><i class="bi bi-plus"></i></a>
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
    </section><!-- End Portfolio Section -->

    
    <section id="search" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Đăng tin ngay</h2>
          <p>Bạn cần tìm gì đó ? Đã có Octopus Genius</p>
        </div>

        <div class="row" >
          <style>
            .row{
              align-self: center;
            }
          </style>

          

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="{{route('them-moi-bai-dang')}}" method="post" role="form" class="php-email-form" enctype = "multipart/form-data">
              @csrf

              <div class="form-group mt-3">
                <label for="name">Loại bài đăng</label>
                
                <select id="subject" name="loai_bai_post">
                @foreach($listDM as $dm)
                <option value="{{$dm->id}}">{{$dm->loai_bai_dang}}</option>
                @endforeach
                </select>
                
              </div>
              <div class="row">
                <div class="form-group mt-3">
                  <label for="name">Tiêu đề</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tiêu đề" required>
                </div>
                
              <div class="form-group mt-3">
                <label for="name">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="subject" placeholder="Địa chỉ" required>
              </div>
             
              <div class="form-group mt-3">
                <label for="name">Loại đồ vật</label>
                
                <select id="subject" name="loai_do_vat">
                @foreach($listDV as $dv)
                <option value="{{$dv->id}}">{{$dv->loai_do_vat}}</option>
                @endforeach
                </select>
                
              </div>
              <div class="form-group mt-3">
                <label for="name">Mô tả</label>
                <textarea class="form-control" name="mo_ta" rows="10" required></textarea>
              </div>
              <div class="form-group mt-3">
             
              <label for="name">Hình ảnh</label>
             <input type="file" name="dang_anh" id = "fileSelect">

              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Đăng bài</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tìm ngay</h2>
          <p>Bạn cần tìm gì đó ? Đã có Octopus Genius</p>
        </div>

        <div class="row">

          

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="" > 
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="search" id="subject" placeholder="Tìm kiếm" required>
              </div>
              <div class="text-center"><button type="submit">Tìm kiếm</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Us Section -->

  </main>
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Liên hệ</h4>
            <p>Bạn cần gì ở chúng tôi</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Gửi">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Octopus Genius</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liên hệ</h4>
            <ul>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Mạng xã hội của chúng tôi</h4>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
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
        <!-- &copy; Copyright <strong><span>Octopus Genius</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Octopus Genius-free-bootstrap-3-theme-for-creative/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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