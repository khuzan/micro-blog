
<?php
session_start();
include "functions/function.php";
$db = connect();
if(isset($_POST['btn_login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if(selectUser($email,$password)){
			if($user==admin){
				$stmt = $db->prepare("SELECT * FROM administrator WHERE username = :admin ");
				$stmt->bindValue(':admin',$email);
				$stmt->execute();
				$account = $stmt->fetch(PDO::FETCH_OBJ);

				$_SESSION['login']=$account->id;
				header('location:home.php');
			}
		else{
				$stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
				$stmt->bindValue(':email',$user);
				$stmt->execute();
				$account = $stmt->fetch(PDO::FETCH_OBJ);

				$_SESSION['login']=$account->id;
		}
	
	}
	else{
		echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
	}}

	if (isset($_POST['btn_login'])) {

		$user_email = trim($_POST['email']);
		$user_pass  = trim($_POST['password']);


		try{
			$stmt = $db->prepare("SELECT * FROM administrator WHERE username = :username");
			$stmt->bindValue(':username',$username);
			$stmt->execute();
			$row = $stmt->fetch(PDO::OBJ);
			$_SESSION['login'] = $account->id;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>

