<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				/**
				 * masukkan file
				 */		
				include 'lib/koneksi.php';
				include 'module/header.php';
				/**
				 * dapatkan id dari url
				 *
				 * dan tampilkan di form input 
				 */
				$id = $_GET['id'];

				$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");

				$row = mysqli_fetch_array($sql);	

				// echo "<pre>", print_r($row);
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
					<div class="col-md-12">
						<div class="page-header">
							<h2 class="text-center">Form Edit (Update)</h2>
						</div>
					</div>
				</div>

				<!-- colom form edit -->
				<div class="row">
					<div class="col-md-5">
						<form methode="GET"	action="siswa/update.php">

							<div class="form-group">
  								<label class="control-label" for="nama">Nama :</label>
  								<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
							</div>

							<div class="form-group">
						  		<label class="control-label" for="email">Email :</label>
						  		<input type="email" class="form-control" name="email"  value="<?php echo $row['email']; ?>">
							</div>

							<div class="form-group">
						  		<label class="control-label" for="hp">No HP :</label>
						  		<input type="text" class="form-control" name="handphone" value="<?php echo $row['handphone'];?>">
							</div>

							<div class="form-group">
								<input type="hidden" name="id"	value="<?php echo $row['id'];?>"></input>
								<input type="submit" value="Update" name="submit" class="btn btn-primary">
								<a href="report.php" class="btn btn-danger">Cancel</a>
								
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
