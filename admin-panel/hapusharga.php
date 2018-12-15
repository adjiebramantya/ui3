<?php
	include("connect.php");

	if (isset($_POST['hapus'])) {
	$id_harga=$_POST['id_harga'];

	$queryhapus="DELETE FROM hargapadi WHERE id_harga=$id_harga";
	$resulthapus=mysqli_query($connection,$queryhapus);
	}

?>

<!-- Modal hapus -->
		
		<div class="modal fade" id="hapus<?php echo $row['id_harga'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Harga</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		<?php 
		$id_harga=$row['id_harga'];
		$queryselecthapus="SELECT * FROM hargapadi WHERE id_harga=$id_harga;";
		$resultselecthapus= mysqli_query($connection,$queryselecthapus);
		$rowselecthapus=mysqli_fetch_assoc($resultselecthapus);
		 ?>
		<form method="post">
		      <div class="modal-body">
		      	<input type="hidden" name="id_harga" value="<?php echo $rowselecthapus['id_harga']?>">
		        Yakin Ingin Menghapus Jenis Beras: <b><?php echo $rowselecthapus['jenisberas']?></b>?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>