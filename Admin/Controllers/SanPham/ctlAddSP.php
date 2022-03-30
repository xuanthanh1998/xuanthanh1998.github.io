<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "<h3>Chưa nhập thông tin</h3>";
}
else
{
    $ten = $_REQUEST["ten_san_pham"];
    $img = $thuvien->getUploadFile("anh_san_pham","Assets/IMG/SanPham");
    $mota = $_REQUEST["mo_ta"];
    $mau = $_REQUEST["mau_sac"];
    $so_luong = $_REQUEST["so_luong"];
    $gia = $_REQUEST["gia"];
    $iddm = $_REQUEST["danh_muc"];
    $ketqua = $sanpham->Them($ten, $img, $mota, $mau, $so_luong, $gia, $iddm);
    if($ketqua==FALSE)
        echo "Lỗi thêm sản phẩm";
    else   
        echo "Thêm thành công";
}

?>