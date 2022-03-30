<?php
require_once("Models/clsDatabase.php");

class clsSPTL extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSSPTCTV()
    {
        $sql = "SELECT * FROM san_pham WHERE id_danh_muc = 2 LIMIT 5";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>
