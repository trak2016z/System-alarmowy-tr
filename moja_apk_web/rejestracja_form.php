
<?php 

session_start();

?>

<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<title>Kontakt z administratorem</title>
		<link rel = "stylesheet" href = "styl_strony.css" type = "text/css" >
		<link href = "https://fonts.googleapis.com/css?family=Lato" rel = "stylesheet" >
		<link href = "https://fonts.googleapis.com/css?family=Exo:900" rel = "stylesheet">
		
	</head>
	
		<body>
			
			<div class = okno_glowne >
			
				<div class = "logo" >
					Domowe systemy alarmowe
				</div>
			 
				<div class = "top_okno" >
					Bezpieczeństwo to jedna z najbardziej cenionych wartości w życiu człowieka. <br>
					Chcemy chronić siebie, swoich bliskich oraz nasze mienie.
    			</div>
    			
    			<?php
					if( !isset( $_SESSION[ 'zalogowano' ] ) )
					{
						echo '<div class = "formularz" >';
						echo 	'<div class = "przyciski" >';
						echo		'<a href = "formularz_logowania.php" class = "przycisk_link" > Zaloguj się </a>';
						echo	'</div>';
						echo	'<div class = "przyciski" >';
						echo		'<a href = "rejestracja_form.php " class = "przycisk_link" > Zarejestruj się </a>';
						echo	'</div>';
						echo '</div>';
						
					}
					else 
					{
						echo '<div class = "formularz" >';
						echo 	'Witaj '.$_SESSION[ 'login' ];
						echo 	'<div class = "przyciski" >';
						echo		'<a href = "wyloguj.php" class = "przycisk_link" > Wyloguj się </a>';
						echo	'</div>';
						echo '</div>';
					}
				?>
				
				<div class = "lewe_okno_menu" >	
					<div class = "przyciski" > 		
						<a href = "index.php" class = "przycisk_link" > Strona główna </a> 
					</div>
					<div class = "przyciski" > 
						<a href = "o_nas.php" class = "przycisk_link" > O nas </a>
					</div>
					<div class = "przyciski" >  
						<a href = "opis_alarmu.php" class = "przycisk_link" > Opis systemu alarmowego </a>
					</div> 
					<div class = "przyciski" > 
						<a href = "sklep.php" class = "przycisk_link" > Sklep </a>
					</div>
					<div class = "przyciski" > 
						<a href = "dodaj_koszyk.php" class = "przycisk_link" > Koszyk </a>
					</div>
					<div class = "przyciski" > 
						<a href = "kontakt.php" class = "przycisk_link" > Kontakt </a> 
					</div>
					<?php 
						
						if( isset( $_SESSION['admin_zalogowany'] ) )
						{
							echo '<div class = "przyciski" >
									<a href = "alarm.php" class = "przycisk_link" > Alarm </a>
								 </div>';
						}
					?>
				</div>
				
				<div class = "prawe_okno_text" >
					<div class = "pole_input" >
						<form action="rejestracja.php" method="post" >
							Podaj nowy login: <input name = "login" type = "text" > 
							<?php
								if( isset( $_SESSION[ 'blad_login' ] ))
								{
									echo $_SESSION[ 'blad_login' ];
									unset( $_SESSION[ 'blad_login' ] );
								}
								
								if(isset( $_SESSION['blad_uzytkownik'] ) )
								{
									echo $_SESSION['blad_uzytkownik'];
									unset( $_SESSION['blad_uzytkownik'] );
								}
							?>
							Podaj swoje hasło: <input name = "haslo" type = "password" >
							<?php
								if( isset( $_SESSION[ 'blad_haslo' ] ))
								{
									echo $_SESSION[ 'blad_haslo' ];
									unset( $_SESSION[ 'blad_haslo' ] );
								}
							?>
							Powtórz swoje hasło: <input name = "haslo1" type = "password" >
							Podaj swój email: <input name = "email" type = "email" >
							<?php 
								if(isset( $_SESSION['blad_uzytkownik_email'] ) )
								{
									echo $_SESSION['blad_uzytkownik_email'];
									unset( $_SESSION['blad_uzytkownik_email'] );
								}

							?>
							<label>
								<input name = "regulamin" type = "checkbox"> Akceptuję regulamin <br>
							</label>
							<?php
								if( isset( $_SESSION[ 'blad_regulamin' ] ))
								{
									echo $_SESSION[ 'blad_regulamin' ];
									unset( $_SESSION[ 'blad_regulamin' ] );
								}
							?>
							<input type = "submit" value = "Zarejestruj się" >
							<input type = "reset" value = "Resetuj pola formularza" >
						</form>
					</div>
				</div>
				
				<div class = "stopka" >					
					Domowe sytemy alarmowe 2016 &copy; Wszystkie prawa zastrzeżone. 
				</div>
			
			</div>
		
		</body>
</html>