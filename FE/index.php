<!doctype html>
<html lang="en">
  <head>
    <title>Danh mục sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/style_dmsp.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/style_ct.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/style_cart.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php
        session_start();
    ?>
    <div class="" style="display: flex; justify-content: flex-end; background-color: #737373;">
        <a href="../DangNhap/index.php" style=" margin-right: 12px; font-size: 14px; padding: 4px 0; text-decoration: none; color: #fff;">Đăng nhập admin</a>
    </div>
    <div class="header-none">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Assets/IMG/anh_header_none/1.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="Assets/IMG/anh_header_none/2.png" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="Assets/IMG/anh_header_none/3.jpg" class="d-block w-100">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <header class="header" data-sub="0">
        <div class="header-top">
            <section>
                <a href="Index.php" class="header-logo">
                    <img src="Assets/IMG/Logo.png">
                </a>
                <div class="bordercol"></div>
                <a href="#" class="header-address" onclick="OpenLocation()">
                    Xem giá, tồn kho hàng:
                    <span data-province="3" data-district="0" data-ward="0">
                        Hà Nội
                    </span>
                </a>
                <form class="header-search">
                    <input type="text" class="iput-search" placeholder="Bạn muốn tìm gì?">
                    <button type="submit">
                        <i class="icon-search"></i>
                    </button>
                    
                </form>
                <a href="?module=giohang" class="header-cart">
                    <span>Giỏ hàng</span>
                    <ion-icon name="cart-outline" style="width: 20px;height: 16px;"></ion-icon>
                </a>
                <a href="#" class="header__history">Lịch sử đơn hàng</a>
                <div class="bordercol"></div>
                <a  href="#" class="header__hot"> </a>
                <div class="header-listtop">
                    <div class="bordercol"></div>
                    <div class="divitem">
                        <a href="?module=tintuc">
                            Tin tức
                        </a>
                    </div>
                    <div class="bordercol"></div>
                    <div class="divitem">
                        <a href="#">
                            Khuyến mãi</a>
                    </div>
                    <div class="bordercol"></div>
                    <div class="divitem">
                        <a href="#">Vào bếp</a>
                    </div>
                    <div class="bordercol"></div>
                </div>
            </section>
        </div>
        <div class="header-main">
            <section>
                <div class="category">
                    <p class="category-txt">
                        <span>Danh mục</span>
                    </p>
                    <a href="?module=danhmuc" class="category-all">Tất cả nhóm hàng</a>
                </div>
                
            </section>
        </div>
    </header>
    <div class="main_w">
        <?php
            $module = (isset($_REQUEST["module"]))?$_REQUEST["module"]:"";
            if($module=="danhmuc")
            {
                require("Controllers/DanhMuc/ctlDanhMuc.php");
            }
            else if($module=="ctsp")
            {
                require("Controllers/ChiTietSanPham/ctlCTSP.php");
            }
            else if($module=="giohang")
            {
                require("Controllers/GioHang/ctlGioHang.php");
            }
            else if($module=="tintuc")
            {
                require("Controllers/TinTuc/ctlTinTuc.php");
            }
            else
            {
                require("Controllers/TrangChu/ctlTrangChu.php");
            }
        ?>
    </div>
    <footer class="footer">
        <section class="footer_top">
            <div class="footer_col">
                <ul class="f-listmenu">
                    <li>
                        <a rel="nofollow" href="#">DV vệ sinh máy lạnh, máy giặt, quạt</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="#"><b>Dịch vụ Sửa Điện - Nước</b></a>
                        <span class="link-item__label__new">Mới</span>
                        <br> Dành cho Gia đình, Doanh nghiệp ở TP.HCM
                    </li>
                    <li><a rel="nofollow" href="#">Lịch sử mua hàng</a></li>
                    <li><a rel="nofollow" href="#">Cộng tác bán hàng cùng TGDĐ</a></li>
                    <li><a rel="nofollow" href="#">Tìm hiểu về mua trả góp</a></li>
                </ul>
            </div>
            <div class="footer_col">
                <ul class="f-listmenu">
                    <li><a rel="nofollow" href="#">Giới thiệu công ty (MWG.vn)</a></li>
                    <li><a rel="nofollow" href="#">Tuyển dụng</a></li>
                    <li><a rel="nofollow" href="#">Gửi góp ý, khiếu nại</a></li>
                    <li><a rel="nofollow" href="#">Tìm siêu thị (1739 shop)</a></li>
                    <li><a rel="nofollow" class="linkversion" href="#">Xem bản mobile</a></li>
                </ul>
            </div>
            <div class="footer_col">
                <div class="f-listtel">
                    <p class="f-listtel_title">
                        <strong>Tổng đài hỗ trợ</strong> (Miễn phí gọi)
                    </p>
                    <p class="f-listtel_content"><span>Gọi mua:</span> <a href="tel:0946008086">0946.008.086</a> (7:30 - 22:00)</p>
                    <p class="f-listtel_content"><span>Kỹ thuật:</span> <a href="tel:0946008086">0946.008.086</a> (7:30 - 22:00)</p>
                    <p class="f-listtel_content"><span>Khiếu nại:</span> <a href="tel:0946008086">0946.008.086</a> (8:00 - 21:30)</p>
                    <p class="f-listtel_content"><span>Bảo hành:</span> <a href="tel:0946008086">0946.008.086</a> (8:00 - 21:00)</p>
                </div>
            </div>
            
        </section>
    </footer>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https: // unkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js"></script>
  </body>
</html>