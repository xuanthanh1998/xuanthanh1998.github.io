<?php
if(isset($_REQUEST["qty"])==false)
	die("<p> lỗi form</p>");
$qty = $_REQUEST["qty"];

foreach($qty as $id=>$soluong)
{
	$_SESSION["cart"][$id] = $soluong;
}
?>

<div class="" style="text-align: center; margin-top: 12px;">
    <h3 style="font-weight: bold;">Cập nhật giỏ hàng thành công</h3>
    <a href="?module=<?=$module?>&act=giohang" style="text-decoration: none; color: #f45b69; font-size: 16px;">Xem giỏ hàng</a>
</div>