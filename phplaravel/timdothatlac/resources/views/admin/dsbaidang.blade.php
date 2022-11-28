<!-- <!DOCTYPE html>
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
                
                <!--/span-->
                

                <!-- TÀI KHOẢN ----------------------------------------------------------------------->
                <div class="span9" id="content">
                    <div class="row-fluid">
                    <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Danh sách bài đăng</div>
                            </div>

                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-success">Thêm bài đăng <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      
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
                                                <td>{{$bd->hinh_anh}}</td>
                                                <td>{{$bd->id_tai_khoan}}</td>
                                                <td>{{$bd->email}}</td>
                                                <td>{{$bd->id_loai_bai_dang}}</td>
                                                <td>{{$bd->id_loai_do_vat}}</td>
                                                <td>{{$bd->trang_thai}}</td>
                                                <td>
                                                    <form action="{{route('xoabaidang', $bd->id)}}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"> Xóa</button>
                                                    </form>
                                               
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <!-- /block -->
                    </div>
                </div>
                    
                    
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; </p>
            </footer>
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

</html> -->