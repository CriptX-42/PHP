<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Posts</title>
	</head>

	<body>
        <?php 
        /*
            $Funny_Messages[1] = "How make chiken?";
            $Funny_Messages[2] = "What?";
            $Funny_Messages[3] = "Where buy chicken";
            $Funny_Messages[4] = "Mom this ins't google!";
            $Funny_Messages[5] = "Avacoda";
        */
            $Test = 'Variable test';
            $Funny_Messages = array(
                'a' => 1,
                'b' => True,
                3 => 7.5,
                'd' =>  $Test,
                'e' => "Avacoda",
            );
            var_dump($Funny_Messages);
            echo '<br/>';
            echo '<br/>';
            print_r($Funny_Messages);
            echo '<br/>';
            echo '<br/>';
            echo $Funny_Messages[3];
		?>
		
	</body>
</html>