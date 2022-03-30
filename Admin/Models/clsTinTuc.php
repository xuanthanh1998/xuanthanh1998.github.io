<?php
require_once("clsDatabase.php");

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

    public function TimTTTheoID($id)
    {
        $sql = "SELECT * FROM tbl_tintuc WHERE matt = ?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    public function Them($ten, $anh, $noidung)
    {
        $sql = "INSERT INTO tbl_tintuc VALUES(NULL,?,?,?)";
        $param = [$ten,$anh, $noidung];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Sua($id,$ten, $anh, $noidung)
    {
        $sql = "UPDATE tbl_tintuc SET tentt=?, anhtt=?, noidung=? WHERE matt=?";
        $param = [$ten, $anh, $noidung, $id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Xoa($id)
    {
        $sql = "DELETE FROM tbl_tintuc WHERE matt=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
}
?>