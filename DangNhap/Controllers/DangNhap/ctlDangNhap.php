<?php
require_once("Models/clsDangNhap.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$login = new clsLogin();

if($act == "xulilogin")
{
    require("ctlVao.php");
}
else
{
    require("ViewS/DangNhap/vDangNhap.php");
}

?>
