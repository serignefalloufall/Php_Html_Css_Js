<?php

//Cette fonction permet d'ajouter un employeur
function addEmployeur($numIdentification, $raisonSocial, $nom_employeur, $adresse_employeur){

    $sql = "INSERT INTO employeur(numIdentification, raisonSocial, nom_employeur, adresse_employeur)
            VALUES('$numIdentification', '$raisonSocial', '$nom_employeur', '$adresse_employeur')";
           return executeSQL($sql);
                    
   }

//Cette fonction permet d'ajouter un client
   function addClientSalarie($nom, $prenom, $adresse, $tel, $email, $salaire, $profession, $type_client_id, $employeur_id){

    $sql = "INSERT INTO client(nom, prenom, adresse, tel, email, salaire, profession, type_client_id, employeur_id)
            VALUES('$nom', '$prenom', '$adresse', '$tel', '$email',0, '$profession', '$type_client_id', '$employeur_id')";
            return executeSQL($sql);
           // INSERT INTO `client`(`nom`, `prenom`, `adresse`, `tel`, `email`, `profession`, `salaire`, `type_client_id`) VALUES ('fall','fallou','thies','3333','ffff@','profess','222',4)
   }

   function addClientNonSalarie($nom, $prenom, $adresse, $tel, $email){

        $sql = "INSERT INTO client(nom, prenom, adresse, tel, email)
                VALUES('$nom', '$prenom', '$adresse', '$tel', '$email')";
                return executeSQL($sql);
               // INSERT INTO `client`(`nom`, `prenom`, `adresse`, `tel`, `email`, `profession`, `salaire`, `type_client_id`) VALUES ('fall','fallou','thies','3333','ffff@','profess','222',4)
       }

   function getListTypeClient(){

    $sql = "SELECT * FROM type_client";
            return executeSQL($sql);
   }

   function getListClient(){

        $sql = "SELECT * FROM client";
                return executeSQL($sql);
       }

   function getListEmployeur(){
        $sql = "SELECT * FROM employeur";
        return executeSQL($sql);
   }

   function getTypeClientById($id){
        $sql = "SELECT libelle from type_client
        WHERE id";
        return executeSQL($sql);
   }

   


?>