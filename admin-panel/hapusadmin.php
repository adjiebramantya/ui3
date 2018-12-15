<?php
	include("connect.php");

	if (isset($_POST['hapus'])) {
	$id_admin=$_POST['id_admin'];

	$queryhapus="DELETE FROM admin WHERE id_admin=$id_admin";
	$resulthapus=mysqli_query($connection,$queryhapus); ?>
	<meta http-equiv="refresh" content="0;url=index.php">
	<?php
	}

?>

<!-- Modal hapus -->
		<div class="modal fade" id="hapus<?php echo $row['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Hapus Admin</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		<?php 
		$id_admin=$row['id_admin'];
		$queryselecthapus="SELECT * FROM admin WHERE id_admin=$id_admin;";
		$resultselecthapus= mysqli_query($connection,$queryselecthapus);
		$rowselecthapus=mysqli_fetch_assoc($resultselecthapus);
		 ?>
			<form method="post">
		      <div class="modal-body">
		      	<input type="hidden" name="id_admin" value="<?php echo $rowselecthapus['id_admin']?>">
		        Yakin Ingin Menghapus data Admin: <b><?php echo $rowselecthapus['nama_lengkap']?></b>?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>