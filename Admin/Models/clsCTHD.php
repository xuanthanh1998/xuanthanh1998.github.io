<?php
require_once("clsDatabase.php");

class clsCTHD extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSCTHD()
    {
        $sql = "SELECT * FROM tbl_hoadon";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function XemHD($id)
    {
        $sql = "SELECT sp.ten_san_pham, sp.anh_san_pham, cthd.soluong, cthd.giamua, cthd.giamua*cthd.soluong AS tongtien FROM tbl_hoadon AS hd, tbl_cthd AS cthd, san_pham AS sp WHERE hd.mahd = cthd.mahd AND cthd.masp = sp.id_san_pham AND hd.mahd=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>