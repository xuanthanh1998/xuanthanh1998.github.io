<?php
require_once("Models/SanPham/clsSanPham.php");
require_once("Models/SanPham/clsSPTV.php");
require_once("Models/SanPham/clsSPTL.php");
require_once("Models/SanPham/clsSPMG.php");
require_once("Models/SanPham/clsSPNC.php");
require_once("Models/SanPham/clsSPNCM.php");
require_once("Models/SanPham/clsSPDH.php");
require_once("Models/SanPham/clsSPL.php");

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$sanpham = new clsSanPham();
$sptv = new clsSPTV();
$sptl = new clsSPTL();
$spmg = new clsSPMG();
$spnc = new clsSPNC();
$spncm = new clsSPNCM();
$spdh = new clsSPDH();
$spl = new clsSPL();

$ketqua = $sanpham->LayDSSPTCPRD();
$ketqua = $sptv->LayDSSPTCTV();
$ketqua = $sptl->LayDSSPTCTV();
$ketqua = $spmg->LayDSSPTCMG();
$ketqua = $spnc->LayDSSPTCNC();
$ketqua = $spncm->LayDSSPTCNCM();
$ketqua = $spdh->LayDSSPDH();
$ketqua = $spl->LayDSSPL();

require("Views/TrangChu/vTrangChu.php");

?>
