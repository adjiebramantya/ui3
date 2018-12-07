<?php
	include("connect.php");

	if (isset($_POST['hapus'])) {
	$id_user=$_POST['id_user'];

	$queryhapus="DELETE FROM user WHERE id_user=$id_user";
	$resulthapus=mysqli_query($connection,$queryhapus);
	}

?>

<!-- Modal hapus -->
		<form method="post">
		<div class="modal fade" id="hapus<?php echo $row['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		<?php 
		$id_user=$row['id_user'];
		$queryselecthapus="SELECT * FROM user WHERE id_user=$id_user;";
		$resultselecthapus= mysqli_query($connection,$queryselecthapus);
		$rowselecthapus=mysqli_fetch_assoc($resultselecthapus);
		 ?>

		      <div class="modal-body">
		      	<input type="hidden" name="id_user" value="<?php echo $rowselecthapus['id_user']?>">
		        Yakin Ingin Menghapus data User: <b><?php echo $rowselecthapus['nama_lengkap']?></b>?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>