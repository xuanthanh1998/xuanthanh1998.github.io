<?php
if($id=="")
{
    echo "Chưa có id xóa";
}
else if(is_numeric($id)==false)
{
    echo "id phải là số";
}
else
{
    $ketqua = $sanpham->Xoa($id);
    if($ketqua==FALSE)
        echo "Lỗi xóa sản phẩm";
    else   
        echo "Xóa thành công";
}
?>