<?php
require_once("clsDatabase.php");

class clsDanhMuc extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSDanhMuc()
    {
        $sql = "SELECT * FROM danh_muc ORDER BY stt";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>
