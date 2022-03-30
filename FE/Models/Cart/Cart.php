<?php
function KetnoiCSDL()
{
	$servername = "localhost:3306"; 
	$user = "root";
	$pass = "";
	$conn = NULL;
	try{
		$conn = new PDO("mysql:host=$servername;dbname=dien_may_xanh",$user,$pass);
		$conn->query("SET NAMES UTF8");
	}
	catch(PDOException $e){
		echo "<p>LỖI KẾT NỐI CSDL</p>";
		echo "<p>" . $e->getMessage() . "</p>";
	}
	return $conn;
}

function Tim_Sanpham_Theo_ID($id)
{
	$conn = KetnoiCSDL();
	if($conn==NULL)
		die("<h3> LỖI KẾT NỐI CSDL </h3>");
	$sql = "SELECT * FROM san_pham WHERE id_san_pham=$id";
	$pdo_stm = $conn->prepare($sql);
	$ketqua = $pdo_stm->execute();
	if($ketqua==FALSE)
		return NULL;
	else
	{
		return $pdo_stm->fetch();
	}
}

function ThemHoaDon($tenkh, $diachi, $sdt, $ngaynhan)
{
	$conn = KetnoiCSDL();
	if($conn==NULL)
		die("<h3> LỖI KẾT NỐI CSDL </h3>");
	$sql = "INSERT INTO tbl_hoadon(tenkh, diachi, sdt, ngaynhan) VALUES(?,?,?,?)";
	$pdo_stm = $conn->prepare($sql);
	$data = [$tenkh, $diachi, $sdt, $ngaynhan];
	$ketqua = $pdo_stm->execute($data);
	if($ketqua==FALSE)
		return 0;
	else
	{
		return $conn->lastInsertId();
	}
}

function ThemChitietHoaDon($mahd,$masp,$soluong,$giasp)
{
	$conn = KetnoiCSDL();
	if($conn==NULL)
		die("<h3> LỖI KẾT NỐI CSDL </h3>");
	$sql = "INSERT INTO tbl_cthd(mahd, masp, soluong, giamua) VALUES(?,?,?,?)";
	$pdo_stm = $conn->prepare($sql);
	$data = [$mahd,$masp,$soluong,$giasp];
	$ketqua = $pdo_stm->execute($data);
	if($ketqua==FALSE)
		return 0;
	else
	{
		return $conn->lastInsertId();
	}
}
?>