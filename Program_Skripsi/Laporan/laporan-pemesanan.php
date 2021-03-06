﻿<?php
	include_once "koneksi.php";
	include_once "helper.php";
?>
<html>
	<head>
		<meta charset="UTF-8">
        <title>Laporan Pemesanan</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<?php include_once "style_laporan.php"; ?>
	</head>
	<body>
		<?php include_once "header_laporan.php"; ?>

		<div style="text-align: center;">
		<h3>
		Laporan Data Pemesanan <br>
		</h3>
		</div>
		<hr>
		<table class="table">
			<tr>
				<th class="table-th">No</th>
				<th class="table-th">No Tiket</th>
				<th class="table-th">Nama Pembeli</th>
				<th class="table-th">Telepon</th>
				<th class="table-th">Tanggal Transaksi</th>
				<th class="table-th">Berangkat</th>
				<th class="table-th">Jam</th>
				<th class="table-th">Jumlah Beli</th>
				<th class="table-th">No Bangku</th>
				<th class="table-th">Total Bayar</th>
			</tr>
			<?php
				$no = 1;
				$sql_query = mysqli_query($koneksi, "Select * From tb_pemesanan");
				while($nilai = mysqli_fetch_assoc($sql_query))
				{
			?>
				<tr>
					<td class="table-td"><?=$no?></td>
					<td class="table-td"><?=$nilai['kode_pemesanan']?></td>
					<td class="table-td"><?=$nilai['nama_pembeli']?></td>
					<td class="table-td"><?=$nilai['telpon']?></td>
					<td class="table-td"><?=tanggal_indo($nilai['tgl_transaksi'])?></td>
					<td class="table-td"><?=tanggal_indo($nilai['tgl_berangkat'])?></td>
					<td class="table-td"><?=$nilai['jam_berangkat']?></td>
					<td class="table-td"><?=$nilai['jumlah_beli']?></td>
					<td class="table-td"><?=$nilai['no_bangku']?></td>
					<td class="table-td"><?=$nilai['total_bayar']?></td>
				</tr>
			<?php
					$no++;
				}
			?>
		</table>
		<hr>

		<div style="float: right;width: 300px;text-align: center;">
			<?=tanggal_indo(date("Y-m-d"), true)?> <br>
			Admin
			<br>
			<br>
			<br>
			<br>
			(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
		</div>

	</body>
</html>