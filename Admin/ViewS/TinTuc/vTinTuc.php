<div class="text-header"><h1>QUẢN LÝ TIN TỨC</h1></div>
<a href="?module=<?=$module?>&act=add" class="bt_them"><div>Thêm tin tức</div></a>
<?php
if($ketqua == FALSE)
{
    echo "<h3>Lỗi TRUY VẤN SQL</h3>";
}
$rows = $tintuc->data;
$n = count($rows);
echo "<h3>Có $n tin</h3>"
?>
<table class="table" style="width: 950px; text-align: center; margin-left: auto; margin-right: auto; margin-top: 35px;">
    <thead>
        <tr>
            <th scope="col" class="tb_text">Mã tin tức</th>
            <th scope="col" class="tb_text">Tiêu đề</th>
            <th scope="col" class="tb_text">Hình ảnh tin tức</th>
            <th scope="col" class="tb_text">Nội dung</th>
            <th scope="col" class="tb_text">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($rows as $row)
            {
        ?>
            <tr>
                <td class="tb_text"><?=$row['matt']?></td>
                <td class="tb_text"><?=$row['tentt']?></td>
                <td class="tb_text" align="center">
                    <img src="Assets/IMG/TinTuc/<?=$row["anhtt"]?>" width="80">  
                </div> 
                </td>
                <td class="tb_text" style=""><p style=" max-width: 90px; max-height: 70px; text-overflow: ellipsis; overflow: hidden;"><?=$row['noidung']?></p></td>
                <td class="tb_text"> 
                    <a href="?module=<?=$module?>&act=edit&id=<?=$row["matt"]?>" class="chuc_nang">Sửa</a>
                    <a href="?module=<?=$module?>&act=xldelete&id=<?=$row["matt"]?>" class="chuc_nang"
                        onClick="return confirm('Chắc chắn xóa?')">Xóa</a>                           
                </td>
            </tr>
        <?php    
            }
        ?>
    </tbody> 
</table>