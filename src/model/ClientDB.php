<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/entities/Employeur.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/entities/Client.php';

//on inclure la class DB et Test pour qu'il soit visible a cette class

class ClientDB extends DB{ //extands c pour definir l'heritage en php

    public function __construct(){
        parent::__construct();//pour faire appelle a notre constructeur parent qui se trouve dans la classe DB
    }

    function addEmployeur(Employeur $employeur){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO employeur(numIdentification, raisonSocial, nom_employeur, adresse_employeur)
            VALUES('".$employeur->getNumIdentification()."', '".$employeur->getRaisonSocial."', '".$employeur->getNom_employeur."', '".$employeur->getAdresse_employeur."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function addClientSalarie(Client $client){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO client(nom, prenom, adresse, tel, email, salaire, profession, type_client_id, employeur_id)
                VALUES('".$client->getNom()."', '".$client->getPrenom()."', '".$client->getAdresse()."', '".$client->getTel()."', '".$client->getEmail()."','".$client->getSalaire()."', '".$client->getProfession()."', '".$client->getType_client_id()."', '".$client->getEmployeur_id()."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function addClientNonSalarie(Client $client){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO client(nom, prenom, adresse, tel, email)
                VALUES('".$client->getNom()."', '".$client->getPrenom()."', '".$client->getAdresse()."', '".$client->getTel()."', '".$client->getEmail()."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function getListTypeClient(){

        $sql = "SELECT * FROM type_client";
       
        if($this->db != null){// si la connexion passe
    
                $rep=$this->db->query($sql)->fetchAll();//on execute la requete
                // var_dump($rep);
                // die();
                return $rep;
            }else{
    
                return null;
    
            }
       }
    
       function getListClient(){
    
            $sql = "SELECT * FROM client";
            if($this->db != null){// si la connexion passe
    
                return $this->db->query($sql);//on execute la requete
    
            }else{
    
                return null;
    
            }
           }
    
       function getListEmployeur(){
            $sql = "SELECT * FROM employeur";
            if($this->db != null){// si la connexion passe
    
                return $this->db->query($sql);//on execute la requete
    
            }else{
    
                return null;
    
            }
       }
    
}
?>