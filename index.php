<?php include'database.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

	<div>
		<button id="tambahdata" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Tambah</button>
	</div>
	<div id="tampildata">
		<?php include'tampil.php' ?>
	</div>
	<div id="proses"> </div>


		

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
    
      
	<div id="cruddata">
         

        <!-- footer modal -->
        
	</div>
        </div>
      </div>
    </div>
  </div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#tambahdata").click(function() {
			$("#cruddata").hide().load("tambah.php").fadeIn(10);
		});
		$('#cruddata').on('click','#simpantambah',function(){
			var nama = $('#nama').val();
			var Jml = $('#Jml').val();
			if (nama =='' || Jml == '') {
				alert('inputan tak boleh kosong');
			}else{
				$.ajax({
					url : 'proses.php?page=tambah',
					type : 'post',
					data : 'nama='+nama+'&Jml='+Jml,
					success : function(msg){
						if (msg == 'sukses') {
							$('#tampildata').load('tampil.php');
						}else{
							alert('inputan gagal');
						}
					}
				});
			}
		});


		$('#tampildata').on('click','.edit',function(){
			var id = $(this).attr('id');
			$.ajax({
				url : 'edit.php',
				type : 'post',
				data : 'id='+id,
				success : function(msg){
					$('#cruddata').hide().fadeIn(10).html(msg);
				}
			});
		});
		$('#cruddata').on('click','#simpanedit',function(){
			var nama = $('#nama').val();
			var Jml = $('#Jml').val();
			var id = $('#id_product').val();
			if (nama =='' || Jml == '' || id == '') {
				alert('inputan tak boleh kosong');
			}else{
				$.ajax({
					url : 'proses.php?page=edit',
					type : 'post',
					data : 'nama='+nama+'&Jml='+Jml+'&id='+id,
					success : function(msg){
						if (msg == 'sukses') {
							$('#tampildata').load('tampil.php');
						}else{
							alert('inputan gagal');
						}
					}
				});
			}
		});
		$('#tampildata').on('click','.hapus',function(){
			var id = $(this).attr('id');
			var conf =confirm('Yakin Menghapus Data Ini ?');
			if (conf == true) {
				
			$.ajax({
				url : 'proses.php?page=hapus',
				type : 'post',
				data : 'id='+id,
				success : function(msg){
					if(msg == 'sukses'){
					$('#tampildata').load('tampil.php');
					$('#cruddata').hide();
					} else{
						alert('gagal menghapus')
					}
				}
			});
			}
		});
	</script>
</body>
</html>

