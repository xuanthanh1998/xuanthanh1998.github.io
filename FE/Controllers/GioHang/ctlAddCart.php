<?php
if($id == "" || is_numeric($id)==false)
{
    die("<h3>Lỗi id</h3>");
}
if( isset($_SESSION["cart"]) && array_key_exists($id,$_SESSION["cart"]))
{
    $soluong = $_SESSION["cart"][$id];
    $soluong++;
    $_SESSION["cart"][$id] = $soluong;
}
else 
{
    $_SESSION["cart"][$id] = 1;
}
?>
<div class="" style="text-align: center; margin-top: 12px;">
    <h3 style="font-weight: bold;">Thêm vào giỏ hàng thành công</h3>
    <a href="?module=<?=$module?>&act=giohang" style="text-decoration: none; color: #f45b69; font-size: 16px;">Xem giỏ hàng</a>
</div>