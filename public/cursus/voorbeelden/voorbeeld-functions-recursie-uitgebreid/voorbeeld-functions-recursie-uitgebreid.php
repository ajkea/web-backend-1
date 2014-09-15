<?php 

	function containsNumber ( $string )
	{
		// Als de string leeg is, return dan false
		// Betekent dat er geen cijfer in de string is gevonden
		if ( $string == '' )
		{
			return false;
		}
		else
		{
			$firstChar =	substr ( $string, 0, 1 );

			if ( is_numeric ( $firstChar ) )
			{
				return true;
			}
			else
			{
				$nextPortion = substr( $string, 1 );
				return containsNumber( $nextPortion );
			}
		}
	}

	var_dump( containsNumber( 'ab2cde' ) );
?>