  <?php 
  include'database.php';
  $id = @$_POST['id'];
  $tampilPerID = mysql_query("SELECT * FROM product WHERE id_product = '$id'");
  $data = mysql_fetch_array($tampilPerID);

   ?>
  <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <!-- body modal -->
   <div class="modal-body">
 <table class="table">
            <thead>
            </thead>
            <tbody>
              <tr>
                <td>
                  Nama
                </td>
                <td>
                  :
                </td>
                <td>
                  <input class="form-control" type="text" id="nama" value="<?=$data['nama']?>">
                </td>
              </tr>
              <td>
                Jumlah
              </td>
              <td>
                :
              </td>
              <td>
                <input class="form-control" type="text" id="Jml" value="<?=$data['Jml']?>">
              </td>
            </tbody>
          </table>
<div class="modal-footer">
        </div>
        <input type="hidden" id="id_product" value="<?=$data['id_product'] ?>">
          <button id="simpanedit" type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
