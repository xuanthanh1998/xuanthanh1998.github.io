<?php
require_once("Models/clsDanhMuc.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$danhmuc = new clsDanhMuc();

if( $act == "add" )
{
    require("ViewS/DanhMuc/vAddDM.php");
}
else if( $act == "xladd" )
{
    require("ctlAddDM.php");
}
else if( $act == "edit" )
{
    $ketqua = $danhmuc->TimDMTheoID($id);
    require("ViewS/DanhMuc/vEditDM.php");
}
else if( $act == "xledit" )
{
    require("ctlEditDM.php");
}
else if( $act == "xldelete" )
{
    require("ctlDeleteDM.php");
}
else
{
    $ketqua = $danhmuc->LayDSDanhMuc();
    require("ViewS/DanhMuc/vDanhMuc.php");
}
?>
