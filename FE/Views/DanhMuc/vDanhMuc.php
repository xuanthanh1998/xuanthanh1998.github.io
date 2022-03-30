<?php
    $rowdm = $danhmuc->data;
    $rowsp = $sanpham->data;
?>
<div class="top-banner">
    <section>
        <div id="carouselExampleIndicators-top-banner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="Assets/IMG/anh_top_banner/1.png" class="d-block w-100" alt=>
                </div>
                <div class="carousel-item">
                <img src="Assets/IMG/anh_top_banner/2.jpg" class="d-block w-100" alt=>
                </div>
                <div class="carousel-item">
                <img src="Assets/IMG/anh_top_banner/3.png" class="d-block w-100" alt=>
                </div>
                <div class="carousel-item">
                <img src="Assets/IMG/anh_top_banner/4.png" class="d-block w-100" alt=>
                </div>
                <div class="carousel-item">
                <img src="Assets/IMG/anh_top_banner/5.png" class="d-block w-100" alt=>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-top-banner" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        <div class="promote-banner">
            <a href="#">
                <img src="Assets/IMG/promote_banner/1.png">
            </a>
            <a href="#">
                <img src="Assets/IMG/promote_banner/2.png">
            </a>
        </div>
    </section>
    </div>
    <div class="block-scroll-main">
        <section>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Danh mục
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <div class="filter-list">
                    <?php
                        foreach($rowdm as $row)
                            {
                    ?>
                        <div>
                            <a href="?module=<?=$module?>&act=ctdm&id=<?=$row["id_danh_muc"]?>" class="c-btnbox">
                                <?= $row['ten_danh_muc']?>
                            </a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </ul>
            </div>
        </section>
    </div>
    <section class="desktop">
        <div class="container-productbox">
            <ul class="listproduct">
                <?php
                    foreach($rowsp as $row)
                        {
                ?>
                    <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                        <div class="sanpham" style="border: 1px #ccc solid;">
                            <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                            <h3><?=$row["ten_san_pham"]?></h3>
                            <p class="item-txt-online">Online giá rẻ</p>
                            <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                        </div>
                    </a> 
                <?php
                        }
                ?>
            </ul>
            </div>
            <section class="prmotebannerbhx">
                <div class="prmotebanner-bhx">
                    <a href="#">
                        <img src="Assets/IMG/anh_header_none/4.jpeg">
                    </a>
                </div>
            </section>
    </section>