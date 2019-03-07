<?php
if( $user->is_logged_in() ){ header('Location: index2.php'); exit(); }
try{
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	if(!$user->isValidUsername($username)){
		throw new Exception('El usuario debe tener mas de 3 caracteres.');
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $username));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(empty($row['username'])){
			throw new Exception('Usuario no registrado.');
			exit;
		}
	}
	if ( $user->isValidUsername($username)){
		if (!isset($_POST['password'])){
			throw new Exception('Introduzca una contraseña.');
		}
		$password = $_POST['password'];
		if($user->login($username,$password)){
			$_SESSION['username'] = $username;
			header('Location: index2.php');
			exit;
		} else {
			throw new Exception('');
			$error[] = 'Su cuenta no ha sido activada o es erronea.';
		}
	}else{
		$error[] = 'El usuario debe tener mas de 3 y 16 caracteres.';
	}
	}
}catch (Exception $e) {
    echo '',  $e->getMessage(), "\n";
}
?>