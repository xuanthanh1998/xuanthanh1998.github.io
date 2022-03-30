<div class="text-header"><h1>THÊM DANH MỤC</h1></div>
<form action="?module=<?=$module?>&act=xladd" method="post" class="tbl">
    <table class="table">
        <tbody>
            <tr>
                <td class="td_text" style="border-bottom-width: 0px">Số thứ tự</td>
                <TD style="border-bottom-width: 0px">
                    <input type="text" name="stt" id="stt" class="input_text">
                </TD>
            </tr>
            <tr>
                <td class="td_text" style="border-bottom-width: 0px">Tên Danh mục</td>
                <TD style="border-bottom-width: 0px">
                    <input type="text" name="ten_danh_muc" id="ten_danh_muc" class="input_text">
                </TD>
            </tr>
            <tr class="td_text">
                <td style="border-bottom-width: 0px"></td>
                <TD style="border-bottom-width: 0px">
                    <input type="submit" value="Thêm mới" name="btn" class="bt_tm">
                </TD>
            </tr>
        </tbody>
    </table>
</form>