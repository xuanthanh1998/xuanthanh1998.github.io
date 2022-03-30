<div class="text-header"><h1>SỬA TIN TỨC</h1></div>
<?php
if($id=="")
{
    echo "<h3>Chưa có id sản phẩm</h3>";
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
if($tintuc->data==NULL)
{
    echo "<h3>Không tìm thấy tin tức có id=$id!</h3>";
    die();
}
$row = $tintuc->data;
?>
<form name="form1" method="post" action="?module=<?=$module?>&act=xledit" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$id?>">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="150" height="30">Tiêu đề:</td>
            <td width="350"><input type="text" name="tieude" id="tieude" value="<?=$row["tentt"]?>"></td>
        </tr>

        <tr>
            <td height="30">Hình ảnh hiện tại:</td>
            <td>
                <img src="Assets/IMG/TinTuc/<?=$row["anhtt"]?>" width="80">
                <input type="hidden" name="img_old" id="img_old" value="<?=$row["anhtt"]?>">
            </td>
        </tr>

        <tr>
            <td height="30">Chọn ảnh mới:</td>
            <td>
                <input type="file" name="img" id="img">
            </td>
        </tr>

        <tr>
            <td height="30">Nội dung:</td>
            <td><textarea type="text" name="noidung" id="mota" rows="5" cols="30"><?=$row["noidung"]?></textarea></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="btn" id="btn" value="Đồng ý"></td>
        </tr>
    </table>
</form>