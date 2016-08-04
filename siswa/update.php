<?php

	error_reporting(E_ALL);
	/**
	 *  include koneksi.php
	 */
	include '../lib/koneksi.php';

	$name = $_GET['nama'];
	$e_mail = $_GET['email'];
	$hp = $_GET['handphone'];
	$id = $_GET['id'];
	/**
	 * sql update data 
	 */
	$sql = "UPDATE siswa 
					SET
						nama='$name', email='$e_mail', handphone='$hp'
					WHERE
						id='$id'";
		
		if (!mysqli_query($koneksi, $sql))
		{
			?>
			<script type="text/javascript">
				alert("update gagal");
				window.location.href="data.php";
			</script>
		<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert('update sukses bung');
				window.location.href="../data.php";
			</script>

	<?php
		}
		
	// echo "<pre>", print_r($sql);
?>
	 
	


?>