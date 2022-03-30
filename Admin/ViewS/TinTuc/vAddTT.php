<div class="text-header"><h1>THÊM TIN TỨC</h1></div>
<form action="?module=<?=$module?>&act=xladd" method="post" class="tbl" enctype="multipart/form-data">
    <table class="table" style="width: 400px;; margin-left: auto; margin-right: auto; margin-top: 35px;">
        <tr>
            <td style="border-bottom-width: 0px">Tiêu đề</td>
            <TD  style="border-bottom-width: 0px">
                <input type="text" name="tieude">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Ảnh tin tức</td>
            <TD  style="border-bottom-width: 0px">
                <input type="file" name="anhtt">
            </TD>
        </tr>

        <tr>
            <td style="border-bottom-width: 0px">Nội dung tin tức</td>
            <TD  style="border-bottom-width: 0px">
            <textarea name="nd" id="t5" rows="5" cols="30"></textarea>
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