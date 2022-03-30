<?php
require_once("Models/clsDanhmuc.php");
require_once("Models/SanPham/clsSanPham.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$danhmuc = new clsDanhMuc();
$sanpham = new clsSanPham();

if( $act == "ctdm" )
{
    $ketqua = $danhmuc->LayDSDanhMuc();
    $ketqua = $sanpham->LayDSSPByIdDM($id);
    require("ViewS/DanhMuc/vDanhMuc.php");
}
else
{
    $ketqua = $danhmuc->LayDSDanhMuc();
    $ketqua = $sanpham->LayDSSP();
    require("ViewS/DanhMuc/vDanhMuc.php");
}

?>
