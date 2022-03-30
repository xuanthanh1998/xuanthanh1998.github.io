<?php
require_once("Models/clsHoaDon.php");
require_once("Models/clsCTHD.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$hoadon = new clsHoaDon();
$cthd = new clsCTHD();

if($act == "xem")
{
    $ketqua = $cthd->XemHD($id);
    $ketqua = $hoadon->LayHDByIdHD($id);
    require("ViewS/HoaDon/vXemHD.php");
}
else
{
    $ketqua = $hoadon->LayDSHD();
    require("ViewS/HoaDon/vHoaDon.php");
}

?>
