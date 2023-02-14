<?php
class client{
private $Nom;
private $Prénom;
private $Télephone;
private $Email;
private $Password;



function __construct($Nom,$Prénom,$Télephone,$Email,$Password){
$this->Nom = addslashes($Nom);
$this->Prénom = addslashes($Prénom);
$this->Télephone = addslashes($Télephone);
$this->Email = addslashes($Email);
$this->Password = md5($Password);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`Nom`, `Prénom`, `Télephone`, `Email`, `Password`)	VALUES ('$this->Nom','$this->Prénom','$this->Télephone',
			'$this->Email','$this->Password')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `Nom`='$this->Nom',`Prénom`='$this->Prénom','Télephone'='$this->Télephone',`Email`='$this->Email',`Password`='$this->Password'  WHERE id = $id ");
				
        
        echo'oui';
        
}	
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
}
}
?>