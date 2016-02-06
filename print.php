<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show raw data</title>

	<style type="text/css">
	
	.pagebreak { page-break-before: always; }

	</style>

</head>
<body>
<center>

	<?php  

	$numberOfData = 35; // Count Data From Database
	$split = 10; // 10 Item Per Page

	?>

	<?php include 'header.html'; ?>
	
	<table border="1" cellpadding="3">

	<?php  

	for ($i=0; $i < $numberOfData; $i++) {

		if ( $i % $split == 0  && $i != 0) { // Check page break
			
			?></table><p class = "pagebreak">&nbsp;</p>

			<?php include 'header.html'; ?>
	
			<table border="1" cellpadding="3">

			<tr>
				<th>No.</th>
				<th>Col 1</th>
				<th>Col 2</th>
				<th>Col 3</th>
			</tr>

			<?php
		} // End IF

		?>

		<tr>
			<td><?php echo $i+1; ?>.</td>
			<td>Data 1</td>
			<td>Data 2</td>
			<td>Data 3</td>
		</tr>

		<?php

		if ( $numberOfData-1 == $i ) { // Check End Data
			
			echo "</table>";
		} // End IF

	}

	?>

	<?php include 'footer.html'; ?>

</center>
</body>
</html>

<script type="text/javascript">
	
	window.print();
	
</script>