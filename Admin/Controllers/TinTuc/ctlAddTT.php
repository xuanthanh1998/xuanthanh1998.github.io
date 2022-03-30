<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "<h3>Chưa nhập thông tin</h3>";
}
else
{
    $tieude = $_REQUEST["tieude"];
    $img = $thuvien->getUploadFile("anhtt","Assets/IMG/TinTuc");
    $noidung = $_REQUEST["nd"];
    $ketqua = $tintuc->Them($tieude, $img, $noidung);
    if($ketqua==FALSE)
        echo "Lỗi thêm sản phẩm";
    else   
        echo "Thêm thành công";
}

?>