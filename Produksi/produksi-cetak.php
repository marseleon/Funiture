<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 70%">
		<tr>
			<th width="2%">No</th>
			<td>$data[Nama]</td>
            <td>$data[Ukuran]</td>
            <td>$data[Harga]</td>
            <td>$data[Bahan]</td>
            <td>$data[Quantity]</td>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_produksi");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['ukuran']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['bahan']; ?></td>
			<td><?php echo $data['qty']; ?></td>
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