<html>	
	<head>
		    <?php
		      	/**
		      	 * include file
		      	 */
		    	include 'module/header.php';
		       	include 'lib/koneksi.php';

		    	/**
		    	 * sql untuk menampilkan record dari table siswa
		    	 * 
		    	 */
		    	$sql = mysqli_query($koneksi,"SELECT id, nama, email, handphone FROM siswa ORDER BY id ASC");
			?>
	</head>
	<body>

		<div class="container">
			<?php
				// include navbar
				include 'module/navbar.php';
			?>

				<div class="row">
					<div class="col-lg-12">
						<div class="page-header">
							<h2 class="text-center">Form Report Data</h2>
						</div>
					</div>
				</div>

				<!-- Export data to EXCEL -->
				<div class="row">				
					<div class="col-md-4">
						<a href="index.php" class="btn btn-danger">Add Data</a>
						<a href="export.php" class="btn btn-danger">Export
							<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
						</a>


					</div>
				</div><br>


				<div class="row">
					<div class="col-md-12">
						<p>
							<!-- table data -->
							<table class="table table-hover table-bordered">
								<!-- table header -->
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama</th>
										<th class="text-center">Email</th>
										<th class="text-center">No Handphone</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>

								<!-- table body -->
								<tbody>

									<!-- tampilkan query table siswa -->
									<?php $no=1; while ($row = mysqli_fetch_array($sql)) { ?>
										<tr>
											<td class="text-center"><?php echo $no; ?></td>
											<td ><?php echo $row['nama']; ?></td>
											<td ><?php echo $row['email']; ?></td>
											<td ><?php echo $row['handphone']; ?></td>

											<!-- link delete dan edit -->
												<td class="text-center">
													<!-- link action -->


														<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success">
														<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
														Update</a> 
														
														<!-- ============== font awesome  ===================== -->
														<a href="siswa/delete.php?id=<?php echo $row['id']; ?>"  class="btn btn-danger">
	  													<i class="fa fa-trash-o" aria-hidden="true"></i>
	  													Delete</a>
												</td>
										</tr>	
									<?php $no++; }?>

								</tbody>
							</table>
						</p>	
					</div>

				</div>
		</div>

		<?php
			 	include 'module/footer.php'; // include footer.php 
		?>

	</body>

</html>