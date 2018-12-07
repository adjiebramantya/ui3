<?php 
	include("connect.php");
	

		if (isset($_POST['tambahfoto'])) {

			$namagambar=$_POST['namagambar'];
			$namafile=$_FILES['namafile']['name'];
			$tanggal_upload=date('y-m-d');

			$querytambah="INSERT INTO galeri (nama_gambar,nama_file,tanggal_upload) VALUES ('$namagambar','$namafile','$tanggal_upload')";

			$resulttambah=mysqli_query($connection,$querytambah);

			move_uploaded_file($_FILES['namafile']['tmp_name'],'image/'.$_FILES['namafile']['name']);
		}
				?>

		<!--Modal-->
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		    <form method="post" enctype="multipart/form-data">
		      <div class="modal-body">
		      		
		        	<div class="form-group row">
					    <label  class="col-sm-3 col-form-label">Nama Foto</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="namagambar">
					    </div>
					 </div>
					 <div class="form-group row">
					    <label class="col-sm-3 col-form-label">Nama File</label>
					    <div class="col-sm-9">
					      <input type="file" class="form-control" name="namafile">
					    </div>
					 </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success" name="tambahfoto">Tambah</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>