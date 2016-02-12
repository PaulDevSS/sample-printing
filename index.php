
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show raw data</title>
</head>
<body>
<center>

	<?php  

	$numberOfData = 35; // Count Data From Database

	?>

	<?php include 'header.html'; ?>
	
	<table border="1" cellpadding="3">

	<tr>
		<th>No.</th>
		<th>Col 1</th>
		<th>Col 2</th>
		<th>Col 3</th>
	</tr>

	<?php  

	for ($i=0; $i < $numberOfData; $i++) {
		
		?>

		<tr>
			<td><?php echo $i+1; ?>.</td>
			<td>Data 1</td>
			<td>Data 2</td>
			<td>Data 3</td>
		</tr>

		<?php
	}

	?>
	</table>

	<?php include 'footer.html'; ?>

	<button onclick = "javascript:window.open('print.php','','');">PRINT</button>

</center>
</body>
</html>