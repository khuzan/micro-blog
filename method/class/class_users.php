<?php 

	// function connect(){
 // 	$db = new PDO("mysql:host=localhost;dbname=bangtan","root","");
 // 	return $db;
 // }
 class Users{
 	function finduser($email, $password){
 		global $db;
// SELECT ADMIN
  	if($email=="admin@mail.com"){
		$query = $db->prepare("SELECT * FROM administrator WHERE email = ? AND password = ?");
		$query->bindParam(1,$email);
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

  	// ELSE USERS
  	else{
		$query = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$query->bindParam(1,$email);
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

}
class Contents{
	function postData(){
 		global $db;
 		
 		$query = $db->prepare("SELECT * FROM contents ORDER BY id DESC");
 		$query->execute();
 		$result = $query->fetchAll(PDO::FETCH_OBJ);
 		return $result;
 	}
 	function postDatabyid($id){
 		// updatedata
 		global $db;
 		$query = $db->prepare("SELECT * FROM contents WHERE id = :id");
 		$query->bindValue('id',$id);
 		$query->execute();
 		$result = $query->fetch(PDO::FETCH_OBJ);
 		return $result;
 	}
 	function getimage(){
 		// delete
 		global $db;

 		$query = $db->prepare("SELECT * FROM contents WHERE id = id");
 		$query->execute();
 		$get = $query->fetch(PDO::FETCH_ASSOC);
 		return $get;
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