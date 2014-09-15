<?php

	$dieren	=	array('kat', 
                     'hond', 
                     'schaap', 
                     'slang',
                     'kaketoe');

	$aantalDieren	=	count ( $dieren );

	$teZoekenDier	=	'paard';
	$dierGevonden	=	in_array ( $teZoekenDier , $dieren ); // returnt true or false

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing array functies</title>
	</head>
	<body>

		<h1>Oplossing array functies</h1>
		
		<pre><?php var_dump ( $dieren ) ?></pre>
		<p>In de array met dieren zitten er in totaal <?php echo $aantalDieren ?> dieren</p>

		<?php if ( $dierGevonden ):  ?>
			<p>Het dier <?php echo $teZoekenDier ?> is teruggevonden!</p>
		<?php else: ?>
			<p>Het dier <?php echo $teZoekenDier ?> is niet teruggevonden.</p>
		<?php endif ?>
		
	</body>
</html>