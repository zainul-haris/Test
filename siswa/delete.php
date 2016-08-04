<?php
	/**
	 * masukkan koneksi.php
	 */
	include '../lib/koneksi.php';

	$id = $_GET['id'];
	
	if (empty($id))
	{
	   //jika id kosong akan kembali ke report.php
		header('location:../report.php');
	}
	else
	{		
		/**
		 * sql delete data
		 * 
		 */
		$sql = mysqli_query($koneksi,"DELETE FROM siswa WHERE id=$id");

		if ($sql) 
		{
			?>
				<script type="text/javascript">
					alert("Delete Data Berhasil");
					window.location.href="../data.php";
				</script>
		<?php
		}
		else 
		{
			echo "gagal delete data";

		}
	}
	?>
?>