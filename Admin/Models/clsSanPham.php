<?php
require_once("clsDatabase.php");

class clsSanPham extends clsDatabase
{
    public $data = NULL;
    function __construct()
    {
        parent::__construct();
    }

    public function LayDSSP()
    {
        $sql = "SELECT sp.*, dm.ten_danh_muc FROM san_pham as sp, danh_muc as dm WHERE sp.id_danh_muc = dm.id_danh_muc";
        $ketqua = $this->ThucthiSQL($sql);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    public function TimSPTheoID($id)
    {
        $sql = "SELECT sp.*, dm.ten_danh_muc FROM san_pham as sp, danh_muc as dm WHERE sp.id_danh_muc = dm.id_danh_muc AND id_san_pham = ?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql,$param);
        if($ketqua==TRUE)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    public function Them($ten, $anh, $mota, $mau, $so_luong, $gia, $iddm)
    {
        $sql = "INSERT INTO san_pham VALUES(NULL,?,?,?,?,?,?,?)";
        $param = [$ten,$anh, $mota, $mau, $so_luong, $gia, $iddm];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Sua($id,$ten, $anh, $mota, $mau, $so_luong, $gia, $iddm)
    {
        $sql = "UPDATE san_pham SET ten_san_pham=?, anh_san_pham=?, mo_ta=?, mau_sac=?, so_luong=?, gia=?, id_danh_muc=? WHERE id_san_pham=?";
        $param = [$ten, $anh, $mota, $mau, $so_luong, $gia, $iddm, $id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
    
    public function Xoa($id)
    {
        $sql = "DELETE FROM san_pham WHERE id_san_pham=?";
        $param = [$id];
        $ketqua = $this->ThucthiSQL($sql, $param);
        return $ketqua;
    }
}
?>