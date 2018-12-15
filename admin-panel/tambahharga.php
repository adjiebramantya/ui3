<?php 
	include("connect.php");
	

		if (isset($_POST['tambah'])) {
			$jenisberas=$_POST['jenisberas'];
			$persen=$_POST['persen'];
			$hargaberas=$_POST['hargaberas'];

			$querytambah="INSERT INTO hargapadi (jenisberas,persen,hargaberas) VALUES ('$jenisberas','$persen','$hargaberas')";

			$resulttambah=mysqli_query($connection,$querytambah);

			if ($resulttambah) {?>
				<div class="alert alert-success" role="alert">
					Berhasil Menambah Data Harga.
				</div>
			<?php }
			else{?>
				<div class="alert alert-danger" role="alert">
					Gagal Menambah Data Harga. Silahkan Coba Lagi!
				</div>
			<?php
			}

		}
		?>

		<!--Modal-->
		<form method="post">
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Harga</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      		
		        	<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Jenis Beras</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="jenisberas">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Persentase</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="persen">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Harga/Kilo</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="hargaberas">
					    </div>
					 </div>
					 
		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
		      </div>
		    </div>
		  </div>
		</div>
		</form>