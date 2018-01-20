<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Chessboard</title>
	</head>

	<body>
        <?php 
        $Chessboard [8]['a'] = 'Black tower';
        $Chessboard [8]['b'] = 'Black Bishop'; 
        $Chessboard [8]['c'] = 'Black Horse';
        $Chessboard [8]['d'] = 'Black Queen';
        $Chessboard [8]['e'] = 'Black King';
        $Chessboard [8]['f'] = 'Black Bishop';
        $Chessboard [8]['g'] = 'Black Horse';
        $Chessboard [8]['h'] = 'Black tower';

        $Chessboard [7]['a'] = 'Black pawn';
        $Chessboard [7]['b'] = 'Black pawn';
        $Chessboard [7]['c'] = 'Black pawn';
        $Chessboard [7]['d'] = 'Black pawn';
        $Chessboard [7]['e'] = 'Black pawn';
        $Chessboard [7]['f'] = 'Black pawn';
        $Chessboard [7]['g'] = 'Black pawn';
        $Chessboard [7]['h'] = 'Black pawn';
        
        print_r($Chessboard);
        echo '<br/>';
        echo '<br/>';
        print $Chessboard[8]['d'];
		?>
		
	</body>
</html>