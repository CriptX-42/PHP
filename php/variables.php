<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Variables</title>
	</head>

	<body>
		<?php 
            //int
            $IntegerValue = 1 * 4;
            echo $IntegerValue;
            echo '<br/>';
            $IntegerValue = $IntegerValue * 2;
            echo $IntegerValue;
            echo '<br/>';

            //float
            $FloatValue = 1.4;
            echo $FloatValue;
            //boolean
            $state = true; //false
            echo '<br/>';
            echo $state .' "State"';
            //strings
            $text = 'Ricardo';
            echo '<br/>';
            echo '$text '. $text;
            //arrays

		?>
		
	</body>
</html>