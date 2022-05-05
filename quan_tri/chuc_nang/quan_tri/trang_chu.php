<?php
  
    include('chuc_nang/quan_tri/funtion.php');
    	   $regexResult = checkPrivilege(); //Kiểm tra quyền thành viên
        if (!$regexResult) {
            echo "<script>alert('Bạn không có quyền truy cập chức năng này');</script>";
            echo "<script>location.href='?menu=dashboard';</script>";
           exit();
            
        }
         include('chuc_nang/quan_tri/security.php');
    if(!isset($login)){exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="">HILL TOP WATCH</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <?php if (checkPrivilege('index.php?menu=logout')) { ?>
                        <a class="dropdown-item" href="?menu=logout">Logout</a>
                        <?php }?>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="?menu=dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tổng quan
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sản phẩm
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if (checkPrivilege('index.php?menu=ql_sanpham')) { ?>
                                    <a class="nav-link" href="?menu=ql_sanpham">Danh sách sản phẩm</a>
                                    <?php } ?>
                                     <?php if (checkPrivilege('index.php?menu=sp_hethang')) { ?>
                                    <a class="nav-link" href="?menu=sp_hethang">Sản phẩm hết hàng</a>
                                    <?php } ?>
                                    <?php if (checkPrivilege('index.php?menu=them_sp')) { ?>
                                    <a class="nav-link" href="?menu=them_sp">Thêm sản phẩm mới</a>
                                     <?php } ?>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Đơn hàng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 
                                        <?php if (checkPrivilege('index.php?menu=hoa_don')) { ?>
                                    <a class="nav-link" href="?menu=hoa_don">Tất cả đơn hàng</a>
                                    <?php } ?>
                                     <?php if (checkPrivilege('index.php?menu=hoa_don_chua')) { ?>
                                    <a class="nav-link" href="?menu=hoa_don_chua">Đơn hàng chưa xử lý</a>
                                    <?php } ?>
                                     <?php if (checkPrivilege('index.php?menu=hoa_don_duyet')) { ?>
                                    <a class="nav-link" href="?menu=hoa_don_duyet">Đơn hàng đã duyệt</a> 
                                   <?php } ?>                           
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Quản trị viên
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAdmin" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionAdmin"> 
                                   <?php if (checkPrivilege('index.php?menu=quan_ly_admin')) { ?>
                                    <a class="nav-link" href="?menu=quan_ly_admin">Danh sách tài khoản</a>
                                    <?php } ?>
                                    <?php if (checkPrivilege('index.php?menu=them_tt_admin')) { ?>
                                    <a class="nav-link" href="?menu=them_tt_admin">Thêm tài khoản</a>
                                     <?php } ?>
                                    <?php if (checkPrivilege('index.php?menu=quan_ly_thanhvien')) { ?>
                                    <a class="nav-link" href="?menu=quan_ly_thanhvien">Quản lý tài khoản thành viên</a>
                               <?php } ?>
                                </nav>
                            </div>


                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Thống Kê
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                                   
                                 <div class="collapse" id="collapseAdmin" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionAdmin"> 
                                 <?php if (checkPrivilege('index.php?menu=thongke')) { ?>       
                            <a class="nav-link" href="?menu=thongke"> Thống kê  </a>
                                <?php } ?>
                               
                          
                             </nav>
                            </div>





                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Đăng nhập với tài khoản:</div>
                        <?php echo $_SESSION['user']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <?php include('menu.php'); ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto no-print">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;  TEAMWORKTDS.</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
        

    </body>
</html>
