<?php
require_once("Models/Cart/clsCart.php");
require_once("Models/SanPham/clsSanPham.php");
require_once("Models/Cart/Cart.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$cart = new clsCart();
$sanpham = new clsSanPham();

if($act == "add")
{
    require("ctlAddCart.php");
}
else if($act == "update")
{
    require("ctlUpdateCart.php");
}
else if($act == "delete")
{
    require("ctlDeleteCart.php");
}
else if($act == "thanhtoan")
{
    require("ctlCheckOut.php");
}
else
{
    require("ViewS/GioHang/vGioHang.php");
}

?>