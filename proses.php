<?php 
include'database.php' ;



	$nama =@$_POST['nama'];
	$Jml =@$_POST['Jml'];
	$id =@$_POST['id'];


if (@$_GET['page'] == 'tambah') {
	$sql = "INSERT INTO product(nama,Jml) VALUES('$nama',$Jml)";
	mysql_query($sql);
	echo "sukses";	
}else if (@$_GET['page'] == 'edit'){
	$edit = mysql_query("UPDATE product SET nama = '$nama', Jml = $Jml  WHERE id_product = $id" );
	echo "sukses";
}
else if (@$_GET['page'] == 'hapus'){
	$delete = mysql_query("DELETE FROM product WHERE id_product = $id" );
	echo "sukses";
}




			
?>