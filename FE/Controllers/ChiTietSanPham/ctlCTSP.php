<?php
require_once("Models/SanPham/clsSanPham.php");

$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$sanpham = new clsSanPham();

$ketqua = $sanpham->LayDSSPByIdSP($id);
require("Views/ChiTietSanPham/vCTSP.php");

?>