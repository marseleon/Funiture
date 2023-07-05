<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 70%">
		<tr>
			<th width="2%">No</th>
			<td>$data[Nama]</td>
            <td>$data[Perusahaan]</td>
            <td>$data[Alamat]</td>
            <td>$data[Telp]</td>
            <td>$data[Kota]</td>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_categories");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Perusahaan']; ?></td>
			<td><?php echo $data['Alamat']; ?></td>
			<td><?php echo $data['Telp']; ?></td>
			<td><?php echo $data['Kota']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>