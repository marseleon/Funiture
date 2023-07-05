<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 70%">
		<tr>
			<th width="2%">No</th>
			<td>Nama</td>
            <td>Alamat</td>
            <td>No.Telp</td>
            <td>E-mail</td>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_customer");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['no']; ?></td>
			<td><?php echo $data['email']; ?></td>
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