<?php
require_once("clsDatabase.php");

class clsLogin extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function XulyLogin($account, $password)
    {
        $sql = "SELECT * FROM tbadmin WHERE account = '?' AND password = '?' limit 1";
        $param = [$account, $password];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>
