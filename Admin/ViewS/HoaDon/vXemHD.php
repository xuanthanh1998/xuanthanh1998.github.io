<div class="text-header"><h1>Hoá đơn <?=$id?></h1></div>
<?php
$tong = 0;
$rowct = $cthd->data;
$rowhd = $hoadon->data;
?>
<div class="col-md-10" style="margin-left: 22px; margin-bottom: 20px;">
          <div
            class="container"
            id="mini_cart"
            style="border: 3px rgb(66,133,222) solid; margin-top:15px; "
            >
            <?php
                foreach($rowhd as $row)
                {
                    $nd = $row["ngaydat"];
                    $nn = $row["ngaynhan"];
            ?>
            <h3 style="line-height: 50px; text-align: center">Thông tin người nhận</h3>
            <table class="table table-stripped">
                <div style="margin-bottom: 6px; border: 1px #ccc solid;">
                    <label for="" style="font-size: larger; padding: 6px 12px;">Họ tên người nhận: <?=$row["tenkh"]?></label>
                </div>
                
                <div style="margin-bottom: 6px; border: 1px #ccc solid;">
                    <label for="" style="font-size: larger; padding: 6px 12px;">Địa chỉ người nhận: <?=$row["diachi"]?></label>
                </div>
                
                <div style="margin-bottom: 6px; border: 1px #ccc solid;">
                    <label for="" style="font-size: larger; padding: 6px 12px;">Số điện thoại người nhận: <?=$row["sdt"]?></label>
                </div>
                
                <div style="margin-bottom: 6px; border: 1px #ccc solid;">
                    <label for="" style="font-size: larger; padding: 6px 12px;">Ngày đặt hàng: <?=date("d-m-Y",strtotime($nd))?></label>
                </div>
                
                <div style="margin-bottom: 6px; border: 1px #ccc solid;">
                    <label for="" style="font-size: larger; padding: 6px 12px;">Ngày nhận hàng: <?=date("d-m-Y",strtotime($nn))?></label>
                </div>

            </table>
            <?php
                }
            ?>
          </div>
        </div>
<div class="container">
            <table class="table table-stripped">
                <tr
                    style="
                    font-size: 1rem;
                    background-color: rgb(66,133,222);
                    color: white;
                    "
                >
                    <th style="width: 50%">Mặt hàng</th>
                    <th style="width: 15%">Số lượng</th>
                    <th style="width: 15%">Đơn giá</th>
                    <th style="width: 20%">Thành tiền</th>
                </tr>
                <?php
                foreach($rowct as $row)
                {
                    $tong += $row["tongtien"];
                ?>
                <tr>
                <td>
                  <div class="cart-info">
                    <img
                      src="../Admin/Assets/IMG/SanPham/<?=$row["anh_san_pham"]?>"
                      alt="Ảnh sản phẩm"
                      style="width: 8rem; margin-right: 20px; float: left"
                    />
                    <div>
                      <span style="font-size: 1.2rem">
                        <?=$row["ten_san_pham"]?>
                      </span>
                      <br />
                      <span> <?=number_format($row['giamua']*$row["soluong"],0,',','.')?>₫ </span>
                      <br />
                    </div>
                  </div>
                </td>
                <td>
                  <p id="item_1" class="" style="text-align: center; width: 50px;"><?=$row["soluong"]?></p>
                </td>
                <td id="price_item_1"><?=number_format($row['giamua'],0,',','.')?>₫</td>
                <td id="total_item_1"><?=number_format($row['tongtien'],0,',','.')?></td>
                <?php
                }
                ?>
                </tr>
                <tr>
                <td colspan="2"></td>
                <td class="text-right" style="border-top: 2px var(--red) solid">
                  Tổng tiền
                </td>
                <td
                  style="font-weight: 900; border-top: 2px var(--red) solid"
                  class="cart_subtotal"
                >
                    <?=number_format($tong,0,',','.')?>₫
                </td>
              </tr>
            </table>
          </div>