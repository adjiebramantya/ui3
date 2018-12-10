<?php 
  if (isset($_POST['btnHapus'])) {
    $idartikel = $_POST['idartikel'];

    $queryhapus = "DELETE FROM artikel WHERE id_artikel=$idartikel";
    if (mysqli_query($connection,$queryhapus)) {
  ?>
  <meta http-equiv="refresh" content="0;url=tabel5.php" />
  <?php  
    }else{
      echo "gagal menghapus data artikel";
    }
  }
 ?>
<div class="modal fade" id="modalHapus<?php  echo $row['id_artikel']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php 
                    $id = $row['id_artikel'];
                    $querydelete = "SELECT*FROM artikel WHERE id_artikel=$id";
                    $resultdelete = mysqli_query($connection,$querydelete);
                    $rowdelete = mysqli_fetch_assoc($resultdelete);
                   ?>
                    <form method="post">
                    <div class="modal-body">
                          <div class="form-group row">
                            <input type="hidden" name="idartikel" value="<?php echo $id; ?>">
                            Apakah Anda yakin ingin menghapus artikel: <strong><?php echo $rowdelete['judul'];?></strong>
                          </div>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary" name="btnHapus">Hapus</button>
                      </div>
                      </form>
              </div>
            </div>
        </div>