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
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Bài đăng</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="index.html"><i class="icon-chevron-right"></i> Bài đăng</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Bài đăng cần duyệt</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Tài khoản người dùng</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Tài khoản  quản lý</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i>Báo cáo</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                        </li>
                        <li>
                            <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>
                        
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        
                    
                    <div class="span9" id="content">

                    
                    

                    

                    

                    

                    

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Danh sách tài khoản</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-success">Thêm tài khoản <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" ,border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Ngày sinh</th>
                                                <th>Trạng thái</th>
                                                <th>Quản lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($nguoiDung as $nd)
                                            <tr>
                                                <td>{{$nd->id}}</td>
                                                <td>{{$nd->ten_dang_nhap}}</td>
                                                <td>{{$nd->email}}</td>
                                                <td>{{$nd->sdt}}</td>
                                                <td>{{$nd->ngay_sinh}}</td>
                                                <td>{{$nd->trang_thai}}</td>
                                                <td>
                                                <!-- <button class="btn btn-success">Button</button>
											    <button class="btn btn-warning">Button</button> -->
											    <button class="btn btn-danger">Xoa</button>
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
                <p>&copy; Vincent Gabriel 2013</p>
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

</html>