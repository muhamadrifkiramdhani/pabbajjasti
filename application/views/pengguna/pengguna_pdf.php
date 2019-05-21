<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
		<table>
				<h3 style="text-align: center;"> Daftar Data Pengguna</h3>
			<tr>
				<th>No</th>
				<th>Nama Pengguna</th>
				<th>No HandPhone</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
			</tr>
			<?php $no=1; foreach ($user as $us ): ?>
			<tr>
				<td><?php echo $no++; 			?></td>
				<td><?php echo md5($us->nama;) 	?></td>
				<td><?php echo $us->nohp; 		?></td>
				<td><?php echo $us->alamat;	 	?></td>
				<td><?php echo $us->tgl_lahir;  ?></td>
			</tr>

		<?php endforeach; ?>
		</table>
</body></html>