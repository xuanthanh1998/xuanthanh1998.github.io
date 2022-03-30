<?php

if(isset($_REQUEST["btntt"])==false)
    die("Cần đặt hàng từ form");

$tenkh = $_REQUEST["tenkh"];
$diachi = $_REQUEST["diachi"];
$sdt = $_REQUEST["sdt"];
$ngaynhan = $_REQUEST["ngaynhan"];
if($tenkh == NULL & $diachi == NULL & $sdt == NULL & $ngaynhan == NULL)
{
    echo '<h3 style="text-align: center; margin-top: 20px; font-weight: bold;"> Bạn chưa nhập thông tin của mình<h3>';
}
else
{
    $tg = date("Y-m-d",strtotime($ngaynhan));

    $idhd = ThemHoaDon($tenkh,$diachi,$sdt,$tg);
    if($idhd == 0)
        die("Lỗi thêm hoá đơn");
    foreach($_SESSION["cart"] as $id => $soluong)
    {
        $row = Tim_Sanpham_Theo_ID($id);
        $giasp = $row["gia"];
        $macthd = ThemChitietHoaDon($idhd,$id,$soluong,$giasp);
        if($macthd==0)
            die("<h3>LỖI THÊM CHI TIẾT HÓA ĐƠN CỦA SẢN PHẨM $id</h3>");
    }
    unset($_SESSION["cart"]);
    echo '
        <div class="" style="text-align: center; margin-top: 12px;">
            <h3 style="text-align: center; margin-top: 20px; font-weight: bold;"> CẢM ƠN BẠN ĐÃ MUA HÀNG<h3>
            <h3 style="text-align: center; margin-top: 20px; font-weight: bold;"> Chúng tôi sẽ liên hệ trong thời gian tối đa 12h </h3>
            <a href="?" style="text-decoration: none; color: #f45b69; font-size: 16px;">Mua thêm sản phẩm</a>
        </div>
    ';
}
?>