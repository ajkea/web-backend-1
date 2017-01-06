<?php

	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$registrationFormName	=	"phpoefening-029-a-registration-form.php";

	if ( isset( $_POST[ 'generate-password' ] ) )
	{
		$generatedPassword	=	generatePassword( 16, true, true );

		$_SESSION[ 'registration' ][ 'email' ]		=	$_POST[ 'email' ];
		$_SESSION[ 'registration' ][ 'password' ]	=	$generatedPassword;

		header( 'location: ' . $registrationFormName );
	}

	elseif ( isset( $_POST[ 'submit' ] ) )
	
	{
		$email		=	$_POST[ 'email' ];
		$password	=	$_POST[ 'password' ];

		$_SESSION[ 'registration' ][ 'email' ]		=	$email;
		$_SESSION[ 'registration' ][ 'password' ]	=	$password;

		# Emailvalidatie
		$isEmail	=	filter_var( $email, FILTER_VALIDATE_EMAIL );

		if ( !$isEmail )
		{
			$emailError = new Message( "error", "Dit is geen geldig e-mailadres. Vul een geldig e-mailadres in." ); 
			
			header('location: ' . $registrationFormName );
		}

		# Paswoordvalidatie
		elseif ( $password == '' )
		{
			new Message( "error", "Dit is geen geldig paswoord. Vul een geldig paswoord in." ); 
			
			header('location: ' . $registrationFormName );
		}
		else
		{
			// controleren of het emailadres reeds in de db voorkomt

			$connection	=	new PDO( 'mysql:host=localhost;dbname=phpoefening029', 'root', '' );

			$db = new Database( $connection );

			$userData	=	$db->query( 'SELECT * 
										FROM users 
										WHERE email = :email', 
									array(':email' => $email ) );

			if ( isset( $userData['data'][ 0 ] ) )
			{
				$userExistsError = new Message( "error", "De gebruiker met het e-mailadres " . $email . "komt reeds voor in onze database." ); 

				header('location: ' . $registrationFormName );
			}
			else
			{
				$newUser	=	User::CreateNewUser( $connection, $email, $password );

				if ( $newUser )
				{
					$registrationSuccess = new Message("success", "Welkom, u bent vanaf nu geregistreerd in onze app.");
					header('location: phpoefening-029-a-dashboard.php');
				}
			}

			

			// gebruiker toevoegen aan de database

			// cookie aanmaken met de juiste value
		}
	}

	function generatePassword($length) {


		$passwordRequirements = FALSE;

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+-*/$%@#_';
	    
	    while(!$passwordRequirements){




		#maakt random wachtwoord
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length+1; $i++)#null-based dus + 1 
	    {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

	    #vormt string naar array
	    $arrayCharacters = str_split($randomString);


	    #voorwaarden paswoord requirements voldaan
	    $alfabetSmall = FALSE;
		$alfabetCaps = FALSE;
		$numeric = FALSE;
		$symbol = FALSE;


	    #loopen array
	    foreach ($arrayCharacters as $value) {
	   


		    if($numeric && $alfabetSmall && $alfabetCaps && $symbol ){
		    	$passwordRequirements = TRUE;
		    	$alfabetSmall = FALSE;
				$alfabetCaps = FALSE;
				$numeric = FALSE;
				$symbol = FALSE;
		    }	
		    else
		    {
		    	$passwordRequirements = FALSE;
		    	if (ctype_digit($value)){
		    		$numeric = TRUE;
		    	}

		    	if (ctype_lower($value)){
		    		$alfabetSmall = TRUE;
		    	}

		    	if (ctype_upper($value)){
		    		$alfabetCaps = TRUE;
		    	}

		    	if (ctype_punct($value)){
		    		$symbol = TRUE;
		    	}
		    }//einde else voor controle voorwaarde
		}//foreach loop
	    }//einde while
	    return $randomString;

	echo $randomString;
	}//einde functie



?>
