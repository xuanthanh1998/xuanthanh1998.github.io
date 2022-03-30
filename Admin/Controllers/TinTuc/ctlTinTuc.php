<?php
require_once("Models/clsTinTuc.php");
require_once("Models/clsThuVien.php");
$thuvien = new clsThuVien();

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$tintuc = new clsTinTuc();

if( $act == "add" )
{
    require("ViewS/TinTuc/vAddTT.php");
}
else if( $act == "xladd" )
{
    require("ctlAddTT.php");
}
else if( $act == "edit" )
{
    $ketqua = $tintuc->TimTTTheoID($id);
    require("ViewS/TinTuc/vEditTT.php");
}
else if( $act == "xledit" )
{
    require("ctlEditTT.php");
}
else if( $act == "xldelete" )
{
    require("ctlDeleteTT.php");
}
else
{
    $ketqua = $tintuc->LayDSTT();
    require("ViewS/TinTuc/vTinTuc.php");
}
?>

