<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="bootstrapadmin/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrapadmin/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendorsadmin/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assetsadmin/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendorsadmin/modernizr-2.6.2-respond-1.1.0.min.js"></script>


        <link href="bootstrapadmin/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrapadmin/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assetsadmin/styles.css" rel="stylesheet" media="screen">
        <link href="assetsadmin/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendorsadmin/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendorsadmin/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="vendorsadmin/jquery-1.9.1.js"></script>
        <script src="bootstrapadmin/js/bootstrap.min.js"></script>
        <script src="vendorsadmin/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assetsadmin/scripts.js"></script>
        <script src="assetsadmin/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </head>
    
    <body>
        @yield('content')




        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Ten dang nhap</a>
                    <div class="nav-collapse collapse">
                        
                        
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="{{route('dstaikhoan')}}"><i class="icon-chevron-right"></i> Tài khoản</a>
                        </li>
                        <li class="active">
                            <a href="{{route('dsbaidangduyet')}}"><i class="icon-chevron-right"></i> Bài đăng cần duyệt</a>
                        </li>
                        <li>
                             <a href="{{route('dsbaidang')}}"><i class="icon-chevron-right"></i> Bài đăng</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Tài khoản  quản lý</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i>Báo cáo</a>
                        </li>
                        <li>
                            <a href="{{ route('trang-chu')}}"><i class="icon-chevron-right"></i>Trang người dùng</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!--/span-->
                <!-- TÀI KHOẢN ----------------------------------------------------------------------->
                <div class="span9" id="content">
                <div>
                            <div >
                                <h1>Danh sách bài đăng cần duyệt</h1>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <table cellpadding="0" cellspacing="0" ,border="0" class="table table-striped table-bordered" id="example2">
                                    <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Hình ảnh</th>
                                                <th>Tài khoản</th>
                                                <th>Email</th>
                                                <th>Loại bài đăng</th>
                                                <th>Loại đồ vật</th>
                                                <th>Trạng thái</th>
                                                <th>Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($baiDang as $bd)
                                            <tr>
                                                <td>{{$bd->id}}</td>
                                                <td>
                                                    <img src="{{ url('public/Image/'.$bd->hinh_anh) }}" width=250px height=250px>
                                                </td>
                                                <td>{{$bd->taiKhoan->ten_dang_nhap}}</td>
                                                <td>{{$bd->taiKhoan->email}}</td>
                                                <td>{{$bd->loaiBaiDang->loai_bai_dang}}</td>
                                                <td>{{$bd->loaiDoVat->loai_do_vat}}</td>
                                                <td>{{$bd->trang_thai}}</td>
                                                <td>
                                                    <form action="{{route('duyetbaidang', $bd->id)}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-info">Duyệt</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                        </div>
                </div>        
                </div>
            </div>           
        </div>
        <!--/.fluid-container-->
        <script src="vendorsadmin/jquery-1.9.1.min.js"></script>
        <script src="bootstrapadmin/js/bootstrap.min.js"></script>
        <script src="vendorsadmin/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assetsadmin/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>