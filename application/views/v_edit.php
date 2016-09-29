<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI</title>
</head>

<body>
<h1>Edit Buku</h1>
	<?php foreach($data_edit as $tes){
	?>
        
    <form method="post" action="<?php echo base_url().'index.php/controller/update' ?>">
    <table>
    	<tr>
        	<td><input type="hidden" name="id" value="<?php echo $tes->id ?>" /></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $tes->judul ?>"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" value="<?php echo $tes->pengarang ?>"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" value="<?php echo $tes->kategori ?>"></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" value="Update" ></td>
        </tr>
	</table>
    </form>
    </
    <?php
	}
	?>
    
</body>
</html>