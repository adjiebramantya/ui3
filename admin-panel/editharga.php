<?php 
	include("connect.php");


		if (isset($_POST['edit'])) {
			$id_harga=$_POST['id_harga'];
			$jenisberas=$_POST['jenis'];
			$persen=$_POST['persen'];
			$hargaberas=$_POST['hargaberas'];

			$queryedit="UPDATE hargapadi SET jenisberas='$jenisberas',persen='$persen',hargaberas='$hargaberas' WHERE id_harga=$id_harga";

			$resultedit=mysqli_query($connection,$queryedit); ?>
		<meta http-equiv="refresh" content="0;url=tabel2.php">
		<?php
		}
		?>



		<!-- Modal ubah -->
		<div class="modal fade" id="edit<?php echo $row['id_harga'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Kota / Harga Padi</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		
		<?php 
		$id_harga=$row['id_harga'];
		$queryselectedit="SELECT * FROM hargapadi WHERE id_harga=$id_harga;";
		$resultselectedit= mysqli_query($connection,$queryselectedit);
		$rowselectedit=mysqli_fetch_assoc($resultselectedit);
		 ?>
				<form method="post">
		      <div class="modal-body">
		      		<div class="form-group row">
					    <div class="col-sm-12">
					      <input type="hidden" class="form-control" name="id_harga" value="<?php echo $rowselectedit['id_harga'] ?>">
					    </div>
					 </div>
		      		<div class="form-group row">
					    <label  class="col-sm-4 col-form-label">Jenis Beras</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="jenis" value="<?php echo $rowselectedit['jenisberas'] ?>">
					    </div>
					 </div>
					<div class="form-group row">
					    <label  class="col-sm-4 col-form-label">Persentase</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="persen" value="<?php echo $rowselectedit['persen'] ?>">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-4 col-form-label">Harga/Kilo</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="hargaberas" value="<?php echo $rowselectedit['hargaberas'] ?>">
					    </div>
					 </div>
		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="edit">Ubah</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>	