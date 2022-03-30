<?php
require_once("Models/clsSanPham.php");
require_once("Models/clsDanhMuc.php");
require_once("Models/clsThuVien.php");
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$sanpham = new clsSanPham();
$danhmuc = new clsDanhMuc();
$thuvien = new clsThuVien();

if( $act == "add" )
{
    $ketqua = $danhmuc->LayDSDanhMuc();
    require("ViewS/SanPham/vAddSP.php");
}
else if( $act == "xladd" )
{
    require("ctlAddSP.php");
}
else if( $act == "edit" )
{
    $ketqua = $danhmuc->LayDSDanhMuc();
    $ketqua = $sanpham->TimSPTheoID($id);
    require("ViewS/SanPham/vEditSP.php");
}
else if( $act == "xledit" )
{
    require("ctlEditSP.php");
}
else if( $act == "xldelete" )
{
    require("ctlDeleteSP.php");
}
else
{
    $ketqua = $sanpham->LayDSSP();
    require("ViewS/SanPham/vSanPham.php");
}
?>
