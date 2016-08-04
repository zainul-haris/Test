<!DOCTYPE html>
	<html>
		<body>

			<?php
				/**
				 * export to excel
				 */
				
				// The function header by sending raw excel
				header("Content-type: application/vnd-ms-excel");
				 
				// Defines the name of the export file "codelution-export.xls"
				header("Content-Disposition: attachment; filename=codelution-export.xls");

				/**
				 * include koneksi.php 
				 */
				include 'config/koneksi.php';

			?>
				
				<table>
					<tr>
						<th>No ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Handphone</th>
					</tr>

					<!-- tambahkan data table siswa -->
					<?php
											
						/**
						 * query get data
						 * 
						 */
						$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id ASC");
						
						while ($row = mysqli_fetch_array($sql)) {
							echo "<tr>";
							echo "<td>" . $row['id'] . "</td>";
							echo "<td>" . $row['nama'] . "</td>";
							echo "<td>" . $row['email'] ."</td>";
							echo "<td>" . $row['handphone'] ."</td>";
							echo "</tr>";								
					}
					?>

				</table>
			
	</body>
</html>