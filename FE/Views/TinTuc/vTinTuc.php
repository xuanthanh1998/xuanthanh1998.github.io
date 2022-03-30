<?php
    $rows = $tintuc->data;
?>
<section>
    <div class="anhtt" style="display: flex; justify-content: center; margin-top: 30px;">
        <img src="Assets/IMG/anhtintuc.jpg" alt="" class="anhdautt" style="width: 860px;">
    </div>
    <div class="listtt" style="border: 1px solid; margin-top: 30px; padding: 12px;">
        <div class="" style="text-align: center;border: 2px #000 solid;">
            <h2 style="font-size: 26px; padding: 4px 0; font-weight: bold;">Tin tức</h2>
        </div>

        <div class="">
            <?php
                foreach($rows as $row)
                {
            ?>
            <div class="" style="display: flex; flex-direction: row; border: 2px #ccc solid; margin: 16px 12px; padding: 6px 6px;">
                <div class="">
                    <img src="../Admin/Assets/IMG/TinTuc/<?=$row["anhtt"]?>" alt="" style="width: 320px;">
                </div>

                <div class="" style="width: 100%; padding: 0 8px; position: relative;">
                    <div class="" style="text-align: center; border: 1px #ccc solid; padding: 4px 0;">
                        <a href="module=<?=$module?>&act=xem&id=<?=$row["matt"]?>" style="text-decoration: none; color: #000;">
                            <h4 style=" margin: 0;"><?=$row["tentt"]?></h4>
                        </a>
                    </div>

                    <div class="">
                        <p style="text-indent: 30px;"><?=substr($row["noidung"],0,490)?></p>
                    </div>

                    <div class="">
                        <a href="?module=<?=$module?>&act=xem&id=<?=$row["matt"]?>" style="text-decoration: none;border: 1px #000 solid; position: absolute; right: 4px; bottom: 0px; padding: 6px; font-size: 16px; background-color: #f45b69; color: #cce6e9; font-weight: bold;">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>
</section>