<?php


session_start();



if(isset($_POST['conferma'])){
	echo $_SESSION['nome']."<br>"; 	
	
	echo $_SESSION['email']."<br>";
	
	echo $_SESSION['password']."<br>";

}



if(isset($_POST['cancella'])){
	header('location:Home.php');
}


?>











<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
	<header><h1>COMPLETA LA REGISTRAZIONE</h1></header>
	<form class="form" action="register.php" method="post">
		<div class="main">
		
			<div class="prima_parte">
				<label for="tipo_utente">Tipo utente</label>
		
				<select name="selStudio" class="select_tipo_utente">
					<option>Tipo Utente</option>
					<option value="1">Amministratore</option>
					<option value="2">Cliente</option>
				</select>
				<label for="nome">Nome</label>
				<input type="text" name="nome" placeholder="Es. Mario" required>

				<label for="cognome">Cognome</label>
				<input type="text" name="cognome" placeholder="Es. Rossi" required>
				
				<label for="indirizzo">Indirizzo</label>
				<input type="text" name="indirizzo" placeholder="Es. Via Goldoni 24" required>
				
				<label for="CAP">CAP</label>
				<input type="text" name="CAP" placeholder="Es. 42015" required>
				
				<label for="paese">Paese</label>
				<input type="text" name="paese" placeholder="Es. Italia" required>
			</div>



			<div class="prima_parte">	
				<label for="provinvcia">Provincia</label>
				<input type="text" name="provincia" placeholder="Es. RE" required>

				<label for="numero_telefono">Numero di telefono</label>
				<input type="text" name="numero_telefono" placeholder="Es. 3398133949" required>
				
				<label for="data_nascita">Data di nascita</label>
				<input type="date" name="data_nascita" placeholder="Es. Via Goldoni 24" required>
				
				<label for="cod_fisc">Codice fiscale</label>
				<input type="text" name="cod_fisc" placeholder="Es. DASHB32J723JHSDJD" required>
				
				<label for="mail_comferma">Conferma Email</label>
				<input type="text" name="mail_comferma" placeholder="Es. pinco.panco@gmail.com" required>
				
				<label for="conferma_pass">Conferma password</label>
				<input type="text" name="conferma_pass" placeholder="Es. pinco.panco@gmail.com" required>
			
			</div>
		
		</div>

		
		<div class="div_button">
				
				<button class="btn" name="conferma">
					Conferma
				</button>
			<button class="btn" name="cancella">
					Cancella
				</button>
			
		</div>
	</form>

</body>
</html>

