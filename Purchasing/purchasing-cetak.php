<?php 
	include '../koneksi.php';
	?>
 
	<table border="1" style="width: 70%">
		<tr>
			<th width="2%">No</th>
			<td>Nama Vendor</td>
            <td>Nama Produk</td>
            <td>Quantity</td>
            <td>Harga</td>
            <td>Sub Total</td>
            <td>Tanggal Order</td>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_purchasing");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama_vendor']; ?></td>
			<td><?php echo $data['nama_produk']; ?></td>
			<td><?php echo $data['qty']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['subtotal']; ?></td>
			<td><?php echo $data['tglorder']; ?></td>
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