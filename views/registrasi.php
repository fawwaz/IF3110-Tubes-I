<?php include 'header.php';?>
	
<div id="page" class="container">
	

	<div id="warning">
	</div>
	<!-- <form action="actions/registrasi-submit.php" method="POST"> -->
	<form action='http://localhost/tubes/index.php?registrasi&action="daftar"' method="POST">
	  Username :<br> <input type="text" name="username" onchange="validator();"><br>
	  Password : <br> <input type="text" name="password" onchange="validator();"><br>
	  Confirm Password : <br> <input type="text" name="confirm_pass" onchange="validator();"> <br>
	  Nama Lengkap : <br> <input type="text" name="nama_lengkap" onchange="validator();"><br>
	  E-Mail : <br> <input type="text" name="email" onchange="validator();"><br>
	  <!-- Nama Lengkap : <br> <input type="text" name="nama_lengkap"><br>
	  Nomor Handphone :<br> <input type="text" name="no_handphone"><br>
	  Alamat :<br> <input type="text" name="alamat"><br>
	  Provinsi: <input type="text" name="provinsi"><br>
	  Last name: <input type="text" name="kabupaten_kota"><br> -->
	  <input id="submit_button" type="submit" value="Submit">
	</form> 
</div>

<script src="assets/js/registrasi.js"></script>

<?php include 'footer.php'; ?>