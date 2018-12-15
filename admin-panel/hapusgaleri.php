<?php
	include("connect.php");

	if (isset($_POST['hapus'])) {
	$id_gambar=$_POST['id_gambar'];

	$queryhapus="DELETE FROM galeri WHERE id_gambar=$id_gambar";
	$resulthapus=mysqli_query($connection,$queryhapus); ?>
	<meta http-equiv="refresh" content="0;url=tabel3.php">
	<?php }

?>

<!-- Modal hapus -->
		
		<div class="modal fade" id="hapus<?php echo $row['id_gambar'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Hapus Gambar</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		<?php 
		$id_gambar=$row['id_gambar'];
		$queryselecthapus="SELECT * FROM galeri WHERE id_gambar=$id_gambar;";
		$resultselecthapus= mysqli_query($connection,$queryselecthapus);
		$rowselecthapus=mysqli_fetch_assoc($resultselecthapus);
		 ?>
			<form method="post">
		      <div class="modal-body">
		      	<input type="hidden" name="id_gambar" value="<?php echo $rowselecthapus['id_gambar']?>">
		        Yakin Ingin Menghapus data Gambar: <b><?php echo $rowselecthapus['nama_gambar']?></b>?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>