<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Odd Or Even</title>
</head>
<body>
	<?php

		for( $i = 1; $i <= 20000 ; $i++){
			if ( $i % 2 == 0 ){
				echo "Number is $i. This is an even number.<br>";
			}

			else {
				echo "Number is $i. This is an odd number.<br>";
			}
		}
	?>
</body>
</html>