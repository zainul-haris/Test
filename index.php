<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				/**
				 * include file
				 */
				include 'module/header.php';
				include 'lib/koneksi.php';
				
			?>

		</head>
		<body>

			<div class="container">
				<?php 
					/**
					 * include navbar
					 */
					include 'module/navbar.php';  
				?>

				<div class="row">
					<div class="col-lg-12">
						<div class="page-header"> <h3>Form Input Data</h3></div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">

						<!-- ========= form input data =========-->
						
						<form id="form-inline" method="POST">

							<?php
								/**
								 * Simpan
								 */
									if(isset($_POST['simpan']))
									{
										/**
										 * sql insert ke tabel siswa
										*/
										$sql = mysqli_query($koneksi, "INSERT INTO siswa(nama, email, handphone)VALUES
												('".$_POST['nama']."','".$_POST['email']."','".$_POST['handphone']."')");
										/**
										 * Check sql
										 */
										if ($sql) 

										{
											?>
									 			<script> 
									 						alert('insert berhasil');
									 						// redirect ke data.php
									 						window.location.href='data.php';
									 			</script>;
		 									<?php
											
											
										}
										else
										{
											echo "Data gagal masuk";
										}										
									}				
									
							?>
						
							<div class="form-group">
  								<label class="control-label" for="nama">Nama :</label>
  									<input type="text" class="form-control" name="nama" id="nama" required placeholder="Enter Nama">
							</div>

							<div class="form-group">
						  		<label class="control-label" for="email">Email :</label>
						  		<input type="email" class="form-control" name="email" id="email" required	placeholder="Enter Email">
							</div>

							<div class="form-group">
						  		<label class="control-label" for="hp">No HP :</label>
						  		<input type="text" class="form-control" name="handphone" id="handphone" placeholder="Enter No HP">
							</div>

							<div class="form-group">
								<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
									
								<input type="reset" value="Reset" class="btn btn-danger">
							</div>
						

						</form>

					</div>

				</div>
			</div>


			<?php
			/**
			 * include footer.php 
			 */
			 	include 'module/footer.php'; 
			?>

		</body>	
	</html>