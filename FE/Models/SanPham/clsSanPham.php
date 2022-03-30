<?php
require_once("Models/clsDatabase.php");

class clsSanPham extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSSP()
    {
        $sql = "SELECT * FROM san_pham";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function LayDSSPTCPRD()
    {
        $sql = "SELECT * FROM san_pham LIMIT 5";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function LayDSSPByIdDM($id)
    {
        $sql = "SELECT * FROM san_pham WHERE id_danh_muc=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function LayDSSPByIdSP($id)
    {
        $sql = "SELECT * FROM san_pham WHERE id_san_pham=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
}
?>
