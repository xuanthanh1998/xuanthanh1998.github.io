<?php
require_once("clsDatabase.php");

class clsHoaDon extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSHD()
    {
        $sql = "SELECT * FROM tbl_hoadon";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function LayHDByIdHD($id)
    {
        $sql = "SELECT * FROM tbl_hoadon WHERE mahd=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>