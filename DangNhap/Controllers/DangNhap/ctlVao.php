<?php

$account = $_REQUEST["tk"];
$password = $_REQUEST["mk"];
$ketqua = $login->XulyLogin($account, $password);

if($ketqua > 0){           
    header("Location: ../Admin/Index.php");
}
else
{           
    echo '<h3>Sai tài khoản hoặc mật khẩu</h3>';
    echo '<a href="?">Về trang đăng nhập</a>';
    require("index.php");
}
?>