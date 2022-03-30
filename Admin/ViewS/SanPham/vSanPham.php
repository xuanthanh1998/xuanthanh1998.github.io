<div class="text-header"><h1>QUẢN LÝ SẢN PHẨM</h1></div>
<a href="?module=<?=$module?>&act=add" class="bt_them"><div>Thêm sản phẩm</div></a>
<?php
if($ketqua == FALSE)
{
    echo "<h3>Lỗi TRUY VẤN SQL</h3>";
}
$rows = $sanpham->data;
$n = count($rows);
echo "<h3>Có $n sản phẩm</h3>"
?>
<table class="table" style="width: 950px; text-align: center; margin-left: auto; margin-right: auto; margin-top: 35px;">
    <thead>
        <tr>
            <th scope="col" class="tb_text">Mã sản phẩm</th>
            <th scope="col" class="tb_text">Tên sản phẩm</th>
            <th scope="col" class="tb_text">Hình ảnh sản phẩm</th>
            <th scope="col" class="tb_text">Mô tả</th>
            <th scope="col" class="tb_text">Màu sắc</th>
            <th scope="col" class="tb_text">Số lượng</th>
            <th scope="col" class="tb_text">Giá</th>
            <th scope="col" class="tb_text">Danh mục</th>
            <th scope="col" class="tb_text">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($rows as $row)
            {
        ?>
            <tr>
                <td class="tb_text"><?=$row['id_san_pham']?></td>
                <td class="tb_text"><?=$row['ten_san_pham']?></td>
                <td class="tb_text" align="center">
                    <img src="Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>" width="80">  
                </div> 
                </td>
                <td class="tb_text" style=""><p style=" max-width: 90px; max-height: 70px; text-overflow: ellipsis; overflow: hidden;"><?=$row['mo_ta']?></p></td>
                <td class="tb_text"><?=$row['mau_sac']?></td>
                <td class="tb_text"><?=$row['so_luong']?></td>
                <td class="tb_text"><?php echo number_format($row['gia'],0,',','.')?>VND</td>
                <td class="tb_text"><?=$row['ten_danh_muc']?></td>
                <td class="tb_text"> 
                    <a href="?module=<?=$module?>&act=edit&id=<?=$row["id_san_pham"]?>" class="chuc_nang">Sửa</a>
                    <a href="?module=<?=$module?>&act=xldelete&id=<?=$row["id_san_pham"]?>" class="chuc_nang"
                        onClick="return confirm('Chắc chắn xóa?')">Xóa</a>                           
                </td>
            </tr>
        <?php    
            }
        ?>
    </tbody> 
</table>