<?php
if(isset($_SESSION["cart"])==false || count($_SESSION["cart"])==0)
{
?>
    <h1 style="text-align: center; margin-top: 20px; font-weight: bold;">Bạn chưa có sản phẩm nào</h1>
<?php
}
else
{
?>
<div id="cart" class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-lg-10" style="margin: auto;">
        <form name="fcart" id="fcart" method="post" action="?module=<?=$module?>&act=update" >
          <div class="container-fluid text-center">
            <h2 class="section-title">GIỎ HÀNG</h2>
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
                $tongtien = 0;
                foreach($_SESSION["cart"] as $id => $soluong)
                {
                  $row = Tim_Sanpham_Theo_ID($id);
                  $tongtien += $row["gia"]*$soluong;
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
                      <span> <?=number_format($row['gia']*$soluong,0,',','.')?>₫ </span>
                      <br />
                      <a href="?module=<?=$module?>&act=delete&id=<?=$id?>" style="text-decoration: none;"> Xóa </a>
                    </div>
                  </div>
                </td>
                <td>
                  <input
                    type="text"
                    id="item_1"
                    name="qty[<?=$id?>]"
                    value="<?=$soluong?>"
                    class="form-control cart_item_quantity"
                    style="text-align: center; width: 5rem"
                  />
                </td>
                <td id="price_item_1"><?=number_format($row['gia'],0,',','.')?>₫</td>
                <td id="total_item_1"><?=number_format($row['gia']*$soluong,0,',','.')?></td>
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
                    <?=number_format($tongtien,0,',','.')?>₫
                </td>
              </tr>
              <tr>
                <td colspan="3"></input></td>
                <td style="font-weight: 900">
                  <input type="submit" name="btn" id="btn" value="Cập nhật giỏ hàng" class="btn btn-danger" style="font-size: 16px;">
                </td>
              </tr>
            </table>
          </div>
        </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10" style="margin: auto;">
          <div
            class="container"
            id="mini_cart"
            style="border: 3px rgb(66,133,222) solid; margin-top:15px; "
            >
            <h3 style="line-height: 50px; text-align: center">Thông tin người nhận</h3>
            <table class="table table-stripped">
              <form name="f2" id="f2" action="?module=<?=$module?>&act=thanhtoan" method="post">
                <label for="customer_name" style="font-size: larger;">Họ tên người nhận:</label>
                <input type="text" class="form-control" name="tenkh">

                <label for="password" style="font-size: larger; margin-top: 18px;">Địa chỉ người nhận:</label>
                <input type="text" class="form-control" name="diachi">
                
                <label for="password" style="font-size: larger; margin-top: 18px;">Số điện thoại người nhận:</label>
                <input type="text" class="form-control" name="sdt">

                <label for="password" style="font-size: larger; margin-top: 18px;">Ngày nhận hàng:</label>
                <input type="date" class="form-control" name="ngaynhan">
                
                <input type="submit" class="btn btn-danger" name="btntt" style="margin-top: 20px; float: right; font-size: 16px;" value="Thanh toán"></input>
              </form>
            </table>
          </div>
        </div>
      </div>

      <!---PARTNEr-->
    </div>
<?php
}
?>