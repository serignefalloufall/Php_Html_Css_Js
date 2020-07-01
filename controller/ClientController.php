<?php

    require_once '../model/DB.php';
    require_once '../model/ClientDB.php';

    if(isset($_POST['btnAjouter'])){

      extract($_POST);
       // var_dump($_POST);  
       
     if($_POST['type_client_id'] == '8'){
            //8 represente typeclient entreprise au niveau de la base
            $resultat = addEmployeur($numIdentification, $raisonSocial, $nom_employeur, $adresse_employeur);

            //echo $resultat;
            require_once '../public/web/rooting.php';
            header("location:$base_url?page=client/add&ok=$resultat");
           
        }else if($_POST['type_client_id'] == '6'){
                        
            $resultat = addClientSalarie($nom, $prenom, $adresse, $tel, $email, $salaire, $profession, $type_client_id, $employeur_id);
            //echo $resultat;
            require_once '../public/web/rooting.php';
            header("location:$base_url?page=client/add&ok=$resultat");

        }else if($_POST['type_client_id'] == '7'){
                        
            $resultat = addClientNonSalarie($nom, $prenom, $adresse, $tel, $email);
            //echo $resultat;
            require_once '../public/web/rooting.php';
            header("location:$base_url?page=client/add&ok=$resultat");

        }

     
       
    }
?>