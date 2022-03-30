<div class="text-header"><h1>Hoá đơn</h1></div>

<?php
if($ketqua == FALSE)
{
    echo "<h3>Lỗi TRUY VẤN SQL</h3>";
}
$rows = $hoadon->data;
?>
<table class="table" width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col" class="tb_text">Mã hoá đơn</th>
        <th scope="col" class="tb_text">Tên khách hàng</th>
        <th scope="col" class="tb_text">Địa chỉ</th>
        <th scope="col" class="tb_text">Số điện thoại</th>
        <th scope="col" class="tb_text">Ngày đặt</th>
        <th scope="col" class="tb_text">Ngày nhận</th>
        <th scope="col" class="tb_text">Chức năng</th>
    </tr>
    <tbody>
    <?php
        foreach($rows as $row)
        {
            $nd = $row["ngaydat"];
            $nn = $row["ngaynhan"];
    ?>
    <tr>
        <td class="tb_text"><?=$row["mahd"]?></td>
        <td class="tb_text"><?=$row["tenkh"]?></td>
        <td class="tb_text"><?=$row["diachi"]?></td>
        <td class="tb_text"><?=$row["sdt"]?></td>
        <td class="tb_text"><?=date("d-m-Y",strtotime($nd))?></td>
        <td class="tb_text"><?=date("d-m-Y",strtotime($nn))?></td>
        <td class="tb_text"> 
            <a href="?module=<?=$module?>&act=xem&id=<?=$row["mahd"]?>" class="chuc_nang">Xem</a>                    
        </td>
    </tr>
    <?php    
        }
    ?>
    </tbody> 
</table>