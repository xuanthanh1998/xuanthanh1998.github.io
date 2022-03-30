<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "Chưa nhập thông tin";
}
else{
    $id = $_REQUEST["id"];
    $tieude = $_REQUEST["tieude"];
    $anh = $thuvien->getUploadFile("img","Assets/IMG/TinTuc");
    if($anh=="")
        $anh = $_REQUEST["img_old"];
    $noidung = $_REQUEST["noidung"];
    $ketqua = $tintuc->Sua($id, $tieude, $anh, $noidung);
    if($ketqua==FALSE)
        echo "Lỗi sửa danh mục";
    else   
        echo "Sửa thành công";
}
?>