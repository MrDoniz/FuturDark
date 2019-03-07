<?php 
if( $user->is_logged_in() ){ header('Location: index2.php'); exit(); }
if(isset($_POST['submit'])){
    if (!isset($_POST['username'])) $error[] = "Please fill out all fields";
    if (!isset($_POST['email'])) $error[] = "Please fill out all fields";
    if (!isset($_POST['password'])) $error[] = "Please fill out all fields";
	$username = $_POST['username'];
	$passwordConfirm = $_POST['passwordConfirm'];
	
	if(!$user->isValidUsername($username)){
		$error[] = 'Usernames must be at least 3 Alphanumeric characters';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $username));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}
	}
	if(strlen($_POST['password']) < 6){
		$error[] = 'Password is too short.';
	}
	if(strlen($_POST['passwordConfirm']) < 6){
		$error[] = 'Confirm password is too short.';
	}
	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}
	$email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}
	}
	if(!isset($error)){
		$hashedpassword = $_POST['password'];
		$activasion = md5(uniqid(rand(),true));
		try {
			$stmt = $db->prepare('INSERT INTO members (username,passwordConfirm,password,email,active) VALUES (:username, :passwordConfirm, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $username,
				':passwordConfirm' => $passwordConfirm,
				':password' => $hashedpassword,
				':email' => $email,
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');
			$to = $_POST['email'];
			$subject = "Shaiya Darkness";
			$body = "<p>Te has registrador en Shaiya Darkness</p>
			<p>Para activar su cuenta, por favor pulsa en el siguiente enlace: <a href='".DIR."/modulos/activate.php?x=$id&y=$activasion'>".DIR."/modulos/activate.php?x=$id&y=$activasion</a></p>
			<p> - Darkness Staff</p>";
			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();
			header('Location: login.php?action=joined');
			exit;
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}
	}
}
?>