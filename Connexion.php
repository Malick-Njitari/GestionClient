<?php

try {
	
$bd=new PDO ('mysql:host=localhost;dbname=gestionclient','root','');

}

catch (PDOexception $err){
	

    $msg="Erreur PDO dans". $err->getmessagedie();
   
}
?>