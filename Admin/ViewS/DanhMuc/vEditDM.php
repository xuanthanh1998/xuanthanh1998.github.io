<div class="text-header"><h1>SỬA DANH MỤC</h1></div>
<?php
if($id=="")
{
    echo "<h3>Chưa có id danh mục</h3>";
    die();
}
if(is_numeric($id)==false)
{
    echo "<h3>Id phải là số</h3>";
    die();
}
if($ketqua==FALSE)
{
    echo "<h3>Lỗi truy vấn csdl</h3>";
    die();
}
if($danhmuc->data==NULL)
{
    echo "<h3>Không tìm thấy sản phẩm có id=$id!</h3>";
    die();
}
$row = $danhmuc->data;
?>
<form name="form1" method="post" action="?module=<?=$module?>&act=xledit">
    <input type="hidden" name="id" value="<?=$id?>">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="td_text" style="border-bottom-width: 0px">Số thứ tự:</td>
            <td style="border-bottom-width: 0px"><input type="text" name="stt" id="stt" value="<?=$row["stt"]?>"></td>
        </tr>
        <tr>
            <td class="td_text" style="border-bottom-width: 0px">Tác giả:</td>
            <td><input type="text" name="tendanhmuc" id="tendanhmuc" value="<?=$row["ten_danh_muc"]?>"></td>
        </tr>
        <tr>
            <td style="border-bottom-width: 0px"></td>
            <td style="border-bottom-width: 0px"><input type="submit" name="btn" id="btn" value="Đồng ý"></td>
        </tr>
    </table>
</form>