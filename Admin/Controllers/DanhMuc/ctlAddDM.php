<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "<h3>Chưa nhập thông tin</h3>";
}
else
{
    $tendm = $_REQUEST["ten_danh_muc"];
    $stt = $_REQUEST["stt"];
    $ketqua = $danhmuc->Them($stt,$tendm);
    if($ketqua==FALSE)
        echo "Lỗi thêm sản phẩm";
    else   
        echo "Thêm thành công";
}

?>