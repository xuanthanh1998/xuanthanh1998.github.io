<div class="text-header"><h1>SỬA SẢN PHẨM</h1></div>
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
if($danhmuc->data==NULL)
{
    echo "<h3>Không tìm thấy sản phẩm có id=$id!</h3>";
    die();
}
$row = $sanpham->data;
?>
<form name="form1" method="post" action="?module=<?=$module?>&act=xledit" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$id?>">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="150" height="30">Tên Sản phẩm:</td>
            <td width="350"><input type="text" name="tensp" id="tensp" value="<?=$row["ten_san_pham"]?>"></td>
        </tr>

        <tr>
            <td height="30">Hình ảnh hiện tại:</td>
            <td>
                <img src="Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>" width="80">
                <input type="hidden" name="img_old" id="img_old" value="<?=$row["anh_san_pham"]?>">
            </td>
        </tr>

        <tr>
            <td height="30">Chọn ảnh mới:</td>
            <td>
                <input type="file" name="img" id="img">
            </td>
        </tr>

        <tr>
            <td height="30">Mô tả:</td>
            <td><textarea type="text" name="mota" id="mota" rows="5" cols="30"><?=$row["mo_ta"]?></textarea></td>
        </tr>

            <tr>
            <td height="30" valign="top">Màu sắc:</td>
            <td><textarea name="mau" id="mau" rows="5" cols="30"><?=$row["mau_sac"]?></textarea></td>
        </tr>

        <tr>
            <td height="30" valign="top">Số lượng:</td>
            <td><input name="soluong" id="soluong" value="<?=$row["so_luong"]?>"></input></td>
        </tr>

        <tr>
            <td height="30">Giá:</td>
            <td><input type="text" name="gia" id="gia" value="<?=$row["gia"]?>"></td>
        </tr>

        <tr>
            <td height="30">Danh mục sản phẩm:</td>
            <td>
            <?php
                $rows = $danhmuc->data;
            ?>
            <select name="danh_muc" id="danh_muc">
                <?php
                    $thuvien->ShowOptions($rows, "id_danh_muc", "ten_danh_muc", $row["id_danh_muc"]);
                ?>
            </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn" id="btn" value="Đồng ý"></td>
        </tr>
    </table>
</form>