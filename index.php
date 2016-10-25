<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	</head>
		<body>
			<h1>
				<?php echo 'Hola Mundo'; ?>
			</h1>
			<?php
				for ($i=2; $i <6; $i++) { 
					echo "<h$i>¿Como estas?</h$i>\n";
				}
			?>
		</body>
</html>