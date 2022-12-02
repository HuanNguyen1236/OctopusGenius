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
            <form action="{{route('xl-cap-nhat-nguoi-dung',['id' => $nguoiDung->id])}}" method="post" role="form" enctype = "multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group mt-3">
                  <label for="name"><h3>Họ và tên</h3></label>
                  <input type="text" name="name" value="{{$nguoiDung->ten_dang_nhap}}"class="form-control" id="name" required>
                </div>
                
              <div class="form-group mt-3">
                <label for="name"><h3>Địa chỉ</h3></label>
                <input type="text" class="form-control" value="{{$nguoiDung->dia_chi}}" name="address" id="subject" required>
              </div>
             
              
              <div class="form-group mt-3">
                <label for="name"><h3>Email</h3></label>
                <input type="text" class="form-control" value="{{$nguoiDung->email}}" name="email" rows="10" required></input>
              </div>
              <div class="form-group mt-3">
             
              <label for="name"><h3>Số điện thoại</h3></label>
             <input type="text" name="sdt" value="{{$nguoiDung->sdt}}" id = "fileSelect" rows="10" required>

             </div>
             <div>
             <label for="name"><h3>Ngày sinh</h3></label>
             <input type="date" class="input-group mb-3" value="{{$nguoiDung->ngay_sinh}}" name="birthday">
              </div>
              <div class="my-3">
                <div class="error-message"></div>
               
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-warning btn-large">Lưu</button>
              </div>
            </form>
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
            <img src="{{ asset('public/Image/'.$post->hinh_anh)  }} " width=100%  height=250px>
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