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

    public function TimDMTheoID($id)
    {
        $sql = "SELECT * FROM danh_muc WHERE id_danh_muc=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    public function Them($stt, $ten)
    {
        $sql = "INSERT INTO danh_muc VALUES(NULL,?,?)";
        $param = [$stt,$ten];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Sua($id,$stt, $ten)
    {
        $sql = "UPDATE danh_muc SET stt=?, ten_danh_muc=? WHERE id_danh_muc=?";
        $param = [$stt,$ten,$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Xoa($id)
    {
        $sql = "DELETE FROM danh_muc WHERE id_danh_muc=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
}
?>
