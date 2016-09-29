<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI</title>
</head>

<body>
<h1>Tambah Buku</h1>
	<form method="post" action="<?php echo base_url().'index.php/controller/tambah_act' ?>">
    <table>
    	<tr>
        	<td>Judul</td>
            <td><input type="text" name="judul" /></td>
        </tr>
        <tr>
        	<td>Pengarang</td>
            <td><input type="text" name="pengarang" /></td>
        </tr>
        <tr>
        	<td>Kategori</td>
            <td><input type="text" name="kategori" /></td>
        </tr>
        <tr>
        	<td><input type="submit" value="input" /></td>
        </tr>
    </table>
    </form>
</body>
</html>