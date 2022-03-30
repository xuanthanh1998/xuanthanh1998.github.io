<?php
    $rows = $sanpham->data;
    $rowtv = $sptv->data;
    $rowtl = $sptl->data;
    $rowmg = $spmg->data;
    $rownc = $spnc->data;
    $rowncm = $spncm->data;
    $rowdh = $spdh->data;
    $rowl = $spl->data;
?>
<section>
    <div class="bartop">
        <div class="bar-top-left-none"></div>
        <div class="homebanner-container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Assets/IMG/anh_homebanner/4.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/IMG/anh_homebanner/5.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/IMG/anh_homebanner/6.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/IMG/anh_homebanner/7.png" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="Assets/IMG/anh_homebanner/8.png" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="owl-stage">
                <div class="owl-item">
                    <div class="item">
                        <p>
                            Hỗ trợ mùa dịch
                            <br>
                            Voucher đến 300 ngàn
                        </p>
                    </div>
                </div>
                
                <div class="owl-item">
                    <div class="item">
                        <p>
                            Sắm Tivi
                            <br>
                            Giảm đến 13 triệu
                        </p>
                    </div>
                </div>

                <div class="owl-item">
                    <div class="item">
                        <p>
                            Máy giặt có sấy
                            <br>
                            Có quà phủ phê
                        </p>
                    </div>
                </div>

                <div class="owl-item">
                    <div class="item">
                        <p>
                            Xe đạp giảm sốc
                            <br>
                            Đến 15%
                        </p>
                    </div>
                </div>

                <div class="owl-item">
                    <div class="item">
                        <p>
                            Máy lọc nước
                            <br>
                            Giảm đến 30%
                        </p>
                    </div>
                </div>
            </div>   
        </div>
        <div class="preorder-hot">
            <a href="#">
                <img src="Assets/IMG/anh_preorder_hot/9.png">
            </a>
            <a href="#">
                <img src="Assets/IMG/anh_preorder_hot/10.png">
            </a>
            <a href="#">
                <img src="Assets/IMG/anh_preorder_hot/11.png">
            </a>
            <a href="#">
                <img src="Assets/IMG/anh_preorder_hot/12.png">
            </a>
            <div class="preorder-hot-bot">
            <a href="#">
                <img src="Assets/IMG/anh_preorder_hot/13.jpg">
            </a>
            </div>
        </div>
    </div>

    <div class="sub-banner">
        <a href="#">
            <img src="Assets/IMG/anh_header_none/3.jpg">
        </a>
    </div>

    <div class="prd-promo">
        <div class="prd-promo-top clear_fix">
            <p class="prd-promo-title">Săn Sale Online Mỗi Ngày</p>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <?php
                    foreach($rows as $row)
                        {
                ?>
                    <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                        <div class="sanpham">
                            <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                            <h3><?=$row["ten_san_pham"]?></h3>
                            <p class="item-txt-online">Online giá rẻ</p>
                            <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                        </div>
                    </a> 
                <?php
                        }
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">TIVI</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-tivi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <?php
                        foreach($rowtv as $row)
                            {
                    ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                    <?php
                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">TỦ LẠNH</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-dienlanh" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <?php
                        foreach($rowtl as $row)
                            {
                    ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                    <?php
                            }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">MÁY GIẶT</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-maylocnuoc" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                            foreach($rowmg as $row)
                                {
                        ?>
                            <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                                <div class="sanpham">
                                    <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                    <h3><?=$row["ten_san_pham"]?></h3>
                                    <p class="item-txt-online">Online giá rẻ</p>
                                    <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                                </div>
                            </a> 
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">NỒI CHIÊN</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-dien-giadung-noibat" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                        foreach($rownc as $row)
                            {
                        ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">NỒI CƠM</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-xedap" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                            foreach($rowncm as $row)
                                {
                        ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">ĐIỀU HOÀ</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-dienthoai" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                            foreach($rowdh as $row)
                                {
                        ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-common">
        <div class=""><h3 style="border: 1px #ccc solid; padding: 8px 16px; margin-top: 12px; background-color: #2c8ef4; color: #fff; border-radius: 4px;">LOA</h3></div>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-phukien-noibat" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                            foreach($rowl as $row)
                                {
                        ?>
                        <a href="?module=ctsp&id=<?=$row["id_san_pham"]?>">
                            <div class="sanpham">
                                <p class="font-anh"><img src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></p>
                                <h3><?=$row["ten_san_pham"]?></h3>
                                <p class="item-txt-online">Online giá rẻ</p>
                                <strong class="price"><?=number_format($row['gia'],0,',','.')?>₫</strong>
                            </div>
                        </a> 
                        <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trademark">
        <h4 class="title-layout">CHUYÊN TRANG THƯƠNG HIỆU</h4>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-trademark" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/1.png"></p>
                        </a>
                        
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/2.png"></p>
                        </a>
                        
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/3.png"></p>
                        </a>

                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/3.png"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/4.png"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/IMG/anh_trademark/5.jpg"></p>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-trademark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-trademark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="trademark">
        <h4 class="title-layout">SẢN PHẨM MỚI</h4>
        <div class="owl-stage-outer">
            <div id="carouselExampleControls-product-new" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/1.png"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/2.png"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/3.png"></p>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/4.jpg"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/5.png"></p>
                        </a>
                        <a href="#">
                            <p class="anh_trademark"><img src="Assets/Img/anh_product_new/6.png"></p>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-product-new" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-product-new" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <section class="prmotebannerbhx">
        <div class="prmotebanner-bhx">
            <a href="#">
                <img src="Assets/Img/anh_header_none/4.jpeg">
            </a>
        </div>
    </section>