<?php
class clsDatabase{
    public $conn = NULL;
    public $pdo_stm = NULL;
    function __construct()
    {
        $servername = "localhost:3306"; 
        $user = "root";
        $pass = "";
        try{
            $this->conn = new PDO("mysql:host=$servername;dbname=dien_may_xanh",$user,$pass);
            $this->conn->query("SET NAMES UTF8");
        }
        catch(PDOException $e){
            echo "<p>" . $e->getMessage() . "</p>";
            die ("<p>LỖI KẾT NỐI CSDL</p>");    
        }
    }
    function ThucthiSQL($sql, $param=NULL)
    {
        $ketqua=FALSE;
        if($this->conn ==NULL)
        {
            echo "<h3>LỖI KẾT NỐI CSDL</h3>"; 
            return FALSE;
        }
        $this->pdo_stm = $this->conn->prepare($sql);
        if($param==NULL)
            $ketqua = $this->pdo_stm->execute();
        else
            $ketqua = $this->pdo_stm->execute($param);
        return $ketqua;
    }

}
?>