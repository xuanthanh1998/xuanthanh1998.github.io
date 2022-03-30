<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/style.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div  class="header">
    <header>
      <div class="row" style="width: 1515px;">
        <div class="col">
          <h3>QUẢN LÝ</h3>
        </div>
        <div class="col-md-auto">
          <ion-icon name="person" class="icon_admin"></ion-icon>
          <p>Admin</p> 
          <a href="#" style="margin-left: 5px;">Đăng xuất</a>
        </div>
      </div>
    </header>
    </div>
    <?php
        $module = (isset($_REQUEST["module"]))?$_REQUEST["module"]:"";
        if($module=="danhmuc")
        {
            
        }
        else
        {
            require("Controllers/DangNhap/ctlDangNhap.php");
        }
    ?>
    <footer>
      <div class="footer"></div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https: // unkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js"></script>
  </body>
</html>