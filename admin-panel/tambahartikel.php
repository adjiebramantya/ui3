<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("connect.php"); ?>
	<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
  	<link href="assets/css/style.css" rel="stylesheet">
     <link href="assets/css/main-style.css" rel="stylesheet">

     <script src="ckeditor5/ckeditor.js"></script>

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
</head>
<body>
	<form method="post">
	<h3>Tambah Artikel</h3>

	Judul: <input type="text" name="judul"><br>
	Isi artikel : <textarea name="isi_artikel" id="editor"></textarea>
	<!-- php - $tgl = date('Y-m-d') -->
	<input type="submit" name="tambah">
	</form>
	
	<?php
		if (isset($_POST['tambah'])) {
			$judul=$_POST['judul'];
			$isi=$_POST['isi_artikel'];

			$tanggal=date('Y-m-d');

			$query="INSERT INTO artikel (judul,tanggal_artikel,isi_artikel) VALUES ('$judul','$tanggal','$isi')";
			$result=mysqli_query($connection,$query);

			header("location:tabel5.php");

		}
	  ?>

	<script>
		ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
	</script>
</body>
</html>