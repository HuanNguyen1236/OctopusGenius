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
</head>
<body>
    <section id="search" class="contact">
      <div class="container" data-aos="fade-up" >
        <div class="section-title">
          <h2>Đăng tin ngay</h2>
          <p>Bạn cần tìm gì đó ? Đã có Octopus Genius</p>
        </div>
        <div >
          <div class="col-lg-7"style="margin:0 auto;" data-aos="fade-up" data-aos-delay="">
            <form action="{{route('them-moi-bai-dang')}}" method="post" role="form" class="php-email-form" enctype = "multipart/form-data">
              @csrf
              <div class="form-group mt-3">
                <label for="name">Loại bài đăng</label>              
                <div>
                <select id="subject" name="loai_bai_post">
                @foreach($listDM as $dm)
                <option value="{{$dm->id}}">{{$dm->loai_bai_dang}}</option>
                @endforeach
                </select>   
                </div>             
              </div>
              <div class="row">
                <div class="form-group mt-3">
                  <label for="name">Tiêu đề</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tiêu đề" >
                </div>                
              <div class="form-group mt-3">
                <label for="name">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="subject" placeholder="Địa chỉ" required>
              </div>            
              <div class="form-group mt-3">
                <label for="name">Loại đồ vật</label>               
                <div>
                <select id="subject" name="loai_do_vat">
                @foreach($listDV as $dv)
                <option value="{{$dv->id}}">{{$dv->loai_do_vat}}</option>
                @endforeach
                </select>    
                </div>           
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
    
    <!-- End Contact Us Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <!-- End Footer -->
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