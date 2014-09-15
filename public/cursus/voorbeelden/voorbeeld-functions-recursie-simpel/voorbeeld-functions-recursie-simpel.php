<?php

    function test( $getal )
    {
        static $counter = 0;
        
        if ( $getal != 0 )
        {
            echo 'ik zit in de if-lus en het getal is' . $getal . ' <br>';
            test( --$getal );
        }
        else
        {
            echo 'ik zit in de else-lus<br>';
            echo 'Het getal is tot nul herleid';
        }

        ++$counter;

        var_dump( $counter );
    }

    test( 3 );

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld van recursie (simpel)</title>
    <link rel="stylesheet" href="css/../../_assets/css/global.css">
</head>
<body>
    
    <section class="body">
        
        <h1>Voorbeeld van recursie (simpel)</h1>

    </section>
    
</body>
</html>