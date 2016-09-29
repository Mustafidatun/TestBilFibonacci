<html>
	<head>
		<title>CRUD dengan CodeIgniter</title>
	</head>
	<body>
		<?php
			$jumlahProduk = $listProducts->num_rows(); 

			if($jumlahProduk == 0){
		?>>
		<?php
			}
			else {
		?>
			<h1>Products List</h1>
			<table border="1">
				<thead>
					<tr>
						<th>No. </th>
						<th>Judul</th>
						<th>Pengarang</th>
						<th>Kategori</th>
                        <th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i = 0; 
						foreach ($listProducts->result() as $row) {
					?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $row->judul ?></td>
						<td><?= $row->pengarang ?></td>
						<td><?= $row->kategori ?></td>
                        <td><?php echo anchor(base_url().'index.php/controller/hapus/'.$row->id,'hapus') ?>
				<?php echo anchor(base_url().'index.php/controller/edit/'.$row->id,'edit') ?></td>
					</tr>
					<?php
						
						}
					?>
                    <tr>
                    <td><?php echo anchor(base_url().'index.php/controller/tambah','tambah');?></td>
                    </tr>
				</tbody>
			</table>
            
		<?php
			}
		?>
        
	</body>
</html>