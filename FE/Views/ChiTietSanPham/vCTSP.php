<?php
    $row = $sanpham->data;
?>
<section>
    <div class="box-header">
        <h1><?=$row['ten_san_pham']?></h1>
    </div>
        <div class="box-main">
            <div>
            <div class="box-left">
                <div class="box_show"><img style="max-height: 425px; max-width: 700px;" src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"></div>
                <div class="scrolling_inner">
                    <div class="box1_tab">
                        <a class="item_box_tab">
                            <div class="item-boder">
                                <ion-icon name="ribbon-outline" class="icondetail-noibat"></ion-icon>
                            </div>
                            <p>Điểm nổi bật</p>
                        </a>
                        <a class="item_box_tab">
                            <div class="item-boder">
                                <ion-icon name="laptop-outline" class="icondetail-noibat"></ion-icon>
                            </div>
                            <p>Màu sắc</p>
                        </a>
                        <a class="item_box_tab">
                            <div class="item-boder">
                                <ion-icon name="cube-outline" class="icondetail-noibat"></ion-icon>
                            </div>
                            <p>Thông số kĩ thuật</p>
                        </a>
                        <a class="item_box_tab">
                            <div class="item-boder">
                                <ion-icon name="mail-outline" class="icondetail-noibat"></ion-icon>
                            </div>
                            <p>Điểm nổi bật</p>
                        </a>
                    </div>
                </div>
                <div class="policy_intuitive">
                    <div class="policy">
                        <ul class="policy_list">
                            <li>
                                <div class="iconl">
                                    <ion-icon name="refresh-circle-outline" class="icondetail-doimoi"></ion-icon>
                                </div>
                                <p>
                                    Hư gì đổi nấy 
                                    <b>12 tháng</b>  
                                    tận nhà (miễn phí tháng đầu) 
                                    <a href="javascript:;" onclick="showPopupPolicy()" title="Chính sách đổi trả">
                                        Xem chi tiết
                                    </a>
                                </p>
                            </li>
                            <li>
                                <div class="iconl">
                                    <ion-icon name="shield-checkmark-outline" class="icondetail-doimoi"></ion-icon>
                                </div>
                                <p>
                                    Bảo hành 
                                    <b>chính hãng tivi 2 năm</b>  
                                    , có người đến tận nhà 
                                </p>
                            </li>
                            <li>
                                <div class="iconl">
                                    <ion-icon name="hand-left-outline" class="icondetail-doimoi"></ion-icon>
                                </div>
                                <p>Thùng tivi có: Sách hướng dẫn, Remote, Chân đế, Adapter</p>
                            </li>
                            <li>
                                <div class="iconl">
                                    <ion-icon name="shield-checkmark-outline" class="icondetail-doimoi"></ion-icon>
                                </div>
                                <p>  Bảo hành Remote 1 năm </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="article content-t-wrap">
                    <div class="article__content short">
                        <h3 class="article__content__title">Bài viết đánh giá</h3>
                        <div>
                            <?= $row['mo_ta']?>
                        </div>
            </div>
        </div>
        
        </div>
        <div class="box-right">
                <div class="scrolling_inner">
                    <div class="box03">
                        <a href="#" data-index="1" class="box03_item item act"><?=$row['mau_sac'] ?></a>
                    </div>
                    <div class="box04">
                        <div class="giamsoc-ol">
                            <p class="giamsoc-ol__top">
                                MUA ONLINE GIÁ TIỀN
                            </p>
                            <div class="giamsoc-ol__bottom">
                                <p class="giamsoc-ol-price"><?= number_format($row['gia'],0,',','.').' ₫'?> </p>
                            </div>
                        </div>
                        <div class="block-price1">
                            <a href="?module=giohang&act=add&id=<?=$row['id_san_pham']?>" class="btn-buynow" style="width: 100%;" name="">MUA NGAY</a>
                        </div>
                        <p class="callorder" style="margin-top: 20px;">Gọi đặt mua <a href="tel:0946008086">0946008086</a> (7:30 - 22:00)</p>
                        
                    </div>                            
                </div>
                
            </div>
    </section>
    
<section>
    <div class="prmotebanner-bhx">
        <a href="#">
            <img src="Assets/IMG/anh_header_none/4.jpeg">
        </a>
    </div>
</section>