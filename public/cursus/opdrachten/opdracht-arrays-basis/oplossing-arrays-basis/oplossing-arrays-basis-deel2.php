<?php

   // Eerste manier
	$getallen =  array( 10, 20, 30, 40, 50, 7383838383 );

   $arrayLengte   =  count ( $getallen );
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing arrays basis: deel2</title>
	</head>
	<body>

      <h1>Oplossing arrays basis: deel2</h1>

      <p>Grootte van array: <?= $arrayLengte ?></p>

      <ul>
         
         <?php 

            /* 
               Niet de meest ideale methode, aangezien er nu wel logica in de view wordt gebruikt,
               maar wel de minst complexe gezien de kennis van PHP.
               Beste oplossing: alles berekenen en de resultaten in een array steken en deze array uitloopen
            */
               
            $teller  =  0;
            $totaal  =  1;

         ?>

         <?php while( $teller < $arrayLengte ): ?>
      
            <?php $totaal *= $getallen[$teller] ?>

            <li>
               teller: <?= $teller ?>, waarde van array: <?= $getallen[$teller] ?>, totaal: <?= $totaal ?>
               </li>

            <?php ++$teller ?>

         <?php endwhile ?>
      </ul>
      

	</body>
</html>