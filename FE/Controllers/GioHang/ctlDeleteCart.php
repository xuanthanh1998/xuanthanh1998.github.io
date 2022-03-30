<?php

if($id=="" || is_numeric($id)==false)
	die("<h3> lỗi id</h3>");
if(isset($_SESSION["cart"]))
{
	if($id==0)
		unset($_SESSION["cart"]);
	else 
		unset($_SESSION["cart"][$id]);
}
?>
<div class="" style="text-align: center; margin-top: 12px;">
    <h3 style="font-weight: bold;">Xoá sản phẩm thành công</h3>
    <a href="?module=<?=$module?>&act=giohang" style="text-decoration: none; color: #f45b69; font-size: 16px;">Xem giỏ hàng</a>
</div>