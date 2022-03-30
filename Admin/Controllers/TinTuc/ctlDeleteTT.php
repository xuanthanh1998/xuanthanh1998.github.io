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
    $ketqua = $tintuc->Xoa($id);
    if($ketqua==FALSE)
        echo "Lỗi xóa tin tức";
    else   
        echo "Xóa thành công";
}
?>