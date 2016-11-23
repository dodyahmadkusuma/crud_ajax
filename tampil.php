
<table border="1" class="table table-hover" style="font-family: sans-serif;">
	<thead style="background-color: salmon">
		<tr>
			<td style="width: 100px;">
				NO
			</td>
			<td>
				NAMA
			</td>
			<td>
				Jumlah
			</td>
			<td colspan="2" align="center" >
				Aksi
			</td>
		</tr>
	</thead>
	<tbody>
<?php include'database.php' ;
 try {

	$tampil = mysql_query("SELECT * FROM product");
	while ($data = mysql_fetch_array($tampil)) {
	
	 ?>
		<tr>
			<td>
				<?= $data['id_product'] ?>
			</td>
			<td>
				<?= $data['nama'] ?>
			</td>
			<td>
				<?= $data['Jml'] ?>
			</td>
			<td align="center" style="width: 150px;">
				<button class="btn btn-default edit" id="<?= $data['id_product']?>" data-toggle="modal" data-target="#myModal">Edit</button>
			</td>
			<td align="center" style="width: 150px;">
				<button class="btn btn-danger hapus" id="<?= $data['id_product']?>">Hapus</button>
			</td>
		</tr>
<?php
}
} catch (Exception $e) {
	echo $e->getMessage();
} ?>
	</tbody>
</table>