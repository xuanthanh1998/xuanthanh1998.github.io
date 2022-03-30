<?php
require_once("Models/clsDatabase.php");

class clsCart extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function ThemHD($tenkh, $diachi, $sdt, $ngaynhan)
    {
        $sql = "INSERT INTO tbl_hoadon(tenkh, diachi, sdt, ngaynhan) VALUES (?,?,?,?)";
        $param = [$tenkh, $diachi, $sdt, $ngaynhan];
        $ketqua = $this->ThucthiSQL($sql, $param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function ThemCTHD($mahd,$masp,$soluong,$giasp)
    {
        $sql = "INSERT INTO tbl_cthd(mahd, masp, soluong, giamua) VALUES (?,?,?,?)";
        $param = [$mahd,$masp,$soluong,$giasp];
        $ketqua = $this->ThucthiSQL($sql, $param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>