<div class="text-header"><h1>DANH MỤC SẢN PHẨM</h1></div>
<a href="?module=<?=$module?>&act=add" class="bt_them"><div>Thêm danh mục</div></a>
<?php
if($ketqua == FALSE)
{
    echo "<h3>Lỗi TRUY VẤN SQL</h3>";
}
$rows = $danhmuc->data;
$n = count($rows);
echo "<h3>Có $n danh mục</h3>"
?>
<table class="table" width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col" class="tb_text">STT</th>
        <th scope="col" class="tb_text">Tên danh mục</th>
        <th scope="col" class="tb_text">Chức năng</th>
    </tr>
    <tbody>
    <?php
        foreach($rows as $row)
        {
    ?>
    <tr>
        <td class="tb_text"><?=$row["stt"]?></td>
        <td class="tb_text"><?=$row["ten_danh_muc"]?></td>
        <td class="tb_text"> 
            <a href="?module=<?=$module?>&act=edit&id=<?=$row["id_danh_muc"]?>" class="chuc_nang">Sửa</a>
            <a href="?module=<?=$module?>&act=xldelete&id=<?=$row["id_danh_muc"]?>" class="chuc_nang"
            onClick="return confirm('Chắc chắn xóa?')">Xóa</a>                           
        </td>
    </tr>
    <?php    
        }
    ?>
    </tbody> 
</table>