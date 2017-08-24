<?php 
	function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=bangtan","root","");
 	return $db;
 }
 	function selectUser(){
 		if($user=="admin"){
  		$db = connect();
		$query = $db->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}
  	else{
  		$db = connect();
		$query = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
}
}

// try
// {
//     if ($db = new PDO("mysql:host=localhost;dbname=bangtan","root",""))
//     {
//        echo "success!";
//     }
//     else
//     {
//         throw new Exception('Unable to connect');
//     }
// }
// catch(Exception $e)
// {
//     echo $e->getMessage();
// }

 ?>