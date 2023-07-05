<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 70%">
		<tr>
			<th width="2%">No</th>
			<td>$data[Nama Barang]</td>
            <td>$data[Quantity]</td>
            <td>$data[Nama Perusahaan]</td>
            <td>$data[Total]</td>
            <td>$data[Tanggal Transaksi]</td>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_acounting");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['quantity']; ?></td>
			<td><?php echo $data['nama_perusahaan']; ?></td>
			<td><?php echo $data['total']; ?></td>
			<td><?php echo $data['tanggal_transaksi']; ?></td>
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