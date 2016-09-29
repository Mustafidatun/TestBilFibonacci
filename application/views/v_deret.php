<html>
	<head>
		<title>Deret dengan CodeIgniter</title>
	</head>
	<body>
    
    <form method="post" action="<?php echo base_url().'index.php/controller/deret'?>">
    
    <?php
	if ($hasil[0]<>1){
		
		echo '<input type="submit" name="btnPrev" value="Prev">';
	}
	
		foreach ($hasil as $key) {
		
		$output = $key % 2;		  
		  
			if ($output == 0){
				echo "<b><font color='#0099FF'> $key </font></b>";
			}
			elseif ($output == 1){
				echo " $key ";
			}
		}
		
    ?>
    
    <input type="hidden" name="var" value="<?php echo $hasil[0] ?>" />
    <input type="hidden" name="var2" value="<?php echo $hasil[1] ?>" />
    <input type="hidden" name="var3" value="<?php echo $hasil[8] ?>" />
    <input type="hidden" name="var4" value="<?php echo $hasil[9] ?>" />

    <input type="submit" name="btnNext" value="Next">
	
   </form>

	</body>
</html>