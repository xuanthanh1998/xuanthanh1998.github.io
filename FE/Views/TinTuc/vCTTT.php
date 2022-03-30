<?php
    $row = $tintuc->data;
?>
<section>
    <div class="" style="margin-top: 60px; display: flex; flex-direction: column; margin-bottom: 60px;">
        <div class="" style="padding: 12px 0;">
            <h1 style="font-weight: bold; text-transform: uppercase;"><?=$row["tentt"]?></h1>
        </div>

        <div class="" style="">
            <img style="width: 100%; margin-top: 40px;" src="../Admin/Assets/IMG/TinTuc/<?=$row["anhtt"]?>" alt="Ảnh tiêu đề">
        </div>

        <div class="" style="margin-top: 30px;">
            <p style="text-indent: 50px; font-size: 18px; text-align: justify; word-spacing: 2px; line-height: 1.5;"><?=$row["noidung"]?></p>
        </div>
    </div>

</section>