<div class="text-header"><h1>THÊM DANH MỤC</h1></div>
<form action="?module=<?=$module?>&act=xladd" method="post" class="tbl" enctype="multipart/form-data">
    <table class="table" style="width: 400px;; margin-left: auto; margin-right: auto; margin-top: 35px;">
        <tr>
            <td style="border-bottom-width: 0px">Tên sản phẩm</td>
            <TD  style="border-bottom-width: 0px">
                <input type="text" name="ten_san_pham">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Ảnh sản phẩm</td>
            <TD  style="border-bottom-width: 0px">
                <input type="file" name="anh_san_pham">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Mô tả</td>
            <TD  style="border-bottom-width: 0px">
            <textarea name="mo_ta" id="t5" rows="5" cols="30"></textarea>
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Màu sắc</td>
            <TD  style="border-bottom-width: 0px">
                <input type="text" name="mau_sac">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Số lượng</td>
            <TD  style="border-bottom-width: 0px">
                <input type="text" name="so_luong">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Giá</td>
            <TD  style="border-bottom-width: 0px">
                <input type="text" name="gia">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Danh_mục</td>
            <TD  style="border-bottom-width: 0px">
                <?php
                    $rows = $danhmuc->data;
                ?>
                <select name="danh_muc" class="select__danh_muc">
                <?php
                    $thuvien->ShowOptions($rows, "id_danh_muc", "ten_danh_muc", 0);
                ?>
                </select> 
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px"></td>
            <TD  style="border-bottom-width: 0px">
                <input type="submit" value="Thêm mới" name="btn" class="bt_tm" >
            </TD>
        </tr>

    </table>
</form>