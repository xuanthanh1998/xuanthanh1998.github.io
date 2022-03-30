<?php
if(isset($_REQUEST["btn"])==false)
{
    echo "Chưa nhập thông tin";
}
else{
    
    $id = $_REQUEST["id"];
    $stt = $_REQUEST["stt"];
    $tendanhmuc = $_REQUEST["tendanhmuc"];
    $ketqua = $danhmuc->Sua($id,$stt,$tendanhmuc);
    if($ketqua==FALSE)
        echo "Lỗi sửa danh mục";
    else   
        echo "Sửa thành công";
}
?>