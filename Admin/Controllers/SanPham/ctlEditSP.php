<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "Chưa nhập thông tin";
}
else{
    $id = $_REQUEST["id"];
    $ten = $_REQUEST["tensp"];
    $anh = $thuvien->getUploadFile("img","Assets/IMG/SanPham");
    if($anh=="")
        $anh = $_REQUEST["img_old"];
    $mota = $_REQUEST["mota"];
    $mau = $_REQUEST["mau"];
    $soluong = $_REQUEST["soluong"];
    $gia = $_REQUEST["gia"];
    $iddm = $_REQUEST["danh_muc"];
    $ketqua = $sanpham->Sua($id, $ten, $anh, $mota, $mau, $soluong, $gia, $iddm);
    if($ketqua==FALSE)
        echo "Lỗi sửa danh mục";
    else   
        echo "Sửa thành công";
}
?>