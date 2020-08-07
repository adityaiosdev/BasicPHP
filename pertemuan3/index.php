

<?php 
	for ($i=0 ; $i<5 ; $i++){
		echo "Alhamdulillah <br> ";
	}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar PHP Struktur Kendali</title>
 	<style>
 	.warna-baris {
 		background-color: silver;
 	}
 </style>
 </head>
 <body>
 	<!-- <table border="1"> 
 		<tr>
 			<td>A</td>
 			<td>B</td>
 		</tr>
 		<tr>
 			<td>C</td>
 			<td>
 			<table border="1">
 				<td>GH</td>
 				<td>EF</td>
 			</table>
 			</td>
 		</tr>
 	</table>
 --> 	
 	<table border="1">
 		<!--  -->
 		<?php for ($i=1 ; $i<=5; $i++ ) : ?>
 			<?php if ($i % 2== 1) : ?>
 				<tr class="warna-baris">
 			<?php else :  ?>
 				<tr>
 			<?php endif ?>
 				<?php for ($j=1 ; $j<=5 ; $j++) :  ?>
 					<td><?= "$i, $j";?> </td>
 				<?php endfor; ?>
 				</tr>
 		<?php endfor; ?>
 	</table>
 <h1>Assalamu'alaikum Adit :)</h1>
 </body>
 </html>