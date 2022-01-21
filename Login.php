<?php
session_start();

$_SESSION['logged']='';
$utente_registrato_o_no = '';
$error = '';


if(isset($_POST['invio'])){

	$nome = $_POST['email'];
	$password = $_POST['pswd'];


    $conn = mysqli_connect("localhost", "root", "", "tepsit");



	if(!$conn){
		die("Connection failed");
	}



    $sql = "SELECT * FROM utenti WHERE (nome = '$nome' AND password= '$password')";

    $result = mysqli_query($conn, $sql);
	$record = mysqli_fetch_array($result);

	


	if(!$record)
	{
		$utente_registrato_o_no = 'utente non registrato';
		$error = 'error';
	}
	else{

		$utente_registrato_o_no = 'utente registrato';
		$error = '';
		$_SESSION['logged'] = true;
		$_SESSION['nome'] = $nome;
		header('location:Home.php');
	}

}



if(isset($_POST['tasto_registra'])){
	$_SESSION['nome'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email_registration'];
	$_SESSION['password'] = $_POST['pswd_registration'];
	header('location:register.php');

}


?>






<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form action="Login.php" method="post">
					
					<label for="chk" aria-hidden="true">Login</label>
					<h4 class="messaggio"><?php echo $utente_registrato_o_no ?></h4>
					<input class="<?php echo $error ?>" type="text" name="email" placeholder="Email" required>
					<input class="<?php echo $error ?>" type="password" name="pswd" placeholder="Password" required>
					<button name='invio'>Login</button>
	
				</form>
			
			</div>
			<div class="signup">
				<form action="Login.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="Name" required>
					<input type="email" name="email_registration" placeholder="Email" required>
					<input type="password" name="pswd_registration" placeholder="Password" required>
					<button name="tasto_registra">Sign up</button>
				</form>
				
			</div>
			


	</div>
</body>
</html>

