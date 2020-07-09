<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/model/ClientDB.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/entities/Employeur.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/entities/Client.php';
if(isset($_POST['btnAjouter'])){

    extract($_POST);
    //var_dump($_POST);

    $employeurObject = new Employeur();//ici on cree un objet 
    $clientObject = new Client();//ici on cree un objet 
    $clientdb = new ClientDB();// l'objet $clientdb c pour acceder au methode qui se trouve class TestDB
  
    if($_POST['type_client_id'] == '8'){
        //8 represente typeclient entreprise au niveau de la base

        $employeurObject->setNumIdentification($numIdentification);
        $employeurObject->setRaisonSocial($raisonSocial);
        $employeurObject->setNom_employeur($nom_employeur);
        $employeurObject->setAdresse_employeur($adresse_employeur);
    
        $resultat = $clientdb->addEmployeur($employeurObject);
        //echo $resultat;
        require_once '../public/web/rooting.php';
        header("location:$base_url?page=client/add&ok=$resultat");
       
    }else if($_POST['type_client_id'] == '6'){
        //6 represente typeclient salarie au niveau de la base

        $clientObject->setNom($nom);
        $clientObject->setPrenom($prenom);
        $clientObject->setAdresse($adresse);
        $clientObject->setTel($tel);
        $clientObject->setEmail($email);
        $clientObject->setSalaire($salaire);
        $clientObject->setProfession($profession);
        $clientObject->setType_client_id($type_client_id);
        $clientObject->setEmployeur_id($employeur_id);

        $resultat = $clientdb->addClientSalarie($clientObject);
        //echo $resultat;
        require_once '../public/web/rooting.php';
        header("location:$base_url?page=client/add&ok=$resultat");

    }else if($_POST['type_client_id'] == '7'){
        //7 represente typeclient non salarie au niveau de la base

        $clientObject->setNom($nom);
        $clientObject->setPrenom($prenom);
        $clientObject->setAdresse($adresse);
        $clientObject->setTel($tel);
        $clientObject->setEmail($email);
                    
        $resultat = $clientdb->addClientNonSalarie($clientObject);
        //echo $resultat;
        require_once '../public/web/rooting.php';
        header("location:$base_url?page=client/add&ok=$resultat");

    }

}

?>