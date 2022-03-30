<?php
require_once("Models/TinTuc/clsTinTuc.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$tintuc = new clsTinTuc;

if($act == "xem")
{
    $ketqua = $tintuc->LayDSTTById($id);
    require("Views/TinTuc/vCTTT.php");
}
else
{
    $ketqua = $tintuc->LayDSTT();
    require("ViewS/TinTuc/vTinTuc.php");
}

?>