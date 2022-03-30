<?php
require_once("Models/clsDatabase.php");

class clsTinTuc extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSTT()
    {
        $sql = "SELECT * FROM tbl_tintuc";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function LayDSTTById($id)
    {
        $sql = "SELECT * FROM tbl_tintuc WHERE matt=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
}
?>
