<?php function salam($nama) { 
	return "Selamat datang, $nama!";
}?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?= salam("Adit"); ?></h1>
	<?php 
	echo date("l", time()+60*60*24*2) ; ?>
	<?php  ?><br>	
 <?php echo time(); ?>
 	<?php  echo "Hari lahir saya " . date("l",mktime(0,0,0,3,22,2000)) ?>
</body>
</html>
