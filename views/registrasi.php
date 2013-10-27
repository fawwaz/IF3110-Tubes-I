<?php include 'header.php';?>
	
<div id="page" class="container">
	<form action="demo_form.asp">
	  Username :<br> <input type="text" name="username" onchange="validator();"><br>
	  Password : <br> <input type="text" name="password"><br>
	  Confirm Password : <br> <input type="text" name="confirm_pass"> <br>
	  Nama Lengkap : <br> <input type="text" name="nama_lengkap"><br>
	  E-Mail : <br> <input type="text" name="email"><br>
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