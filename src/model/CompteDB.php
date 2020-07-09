<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/entities/Compte.php';

//on inclure la class DB et Test pour qu'il soit visible a cette class

class CompteDB extends DB{ //extands c pour definir l'heritage en php

    public function __construct(){
        parent::__construct();//pour faire appelle a notre constructeur parent qui se trouve dans la classe DB
    }

    function addCompteEpargne(Compte $compte){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,type_compte_id,client_id)
                VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getFrais_ouverture()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function addCompteCourant(Compte $compte){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, agio,date_ouverture,type_compte_id,client_id)
        VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getAgio()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function addCompteBloque(Compte $compte){//on donne a notre fonction comme prametre un objet
        
        $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,type_compte_id,client_id)
                VALUES('".$compte->getNum_compte()."', '".$compte->getAgence_id()."', '".$compte->getCle_rip()."', '".$compte->getFrais_ouverture()."', '".$compte->getDate_ouverture()."', '".$compte->getType_compte_id()."', '".$compte->getClient_id()."')";

        if($this->db != null){// si la connexion passe
    
            return $this->db->exec($sql);//on execute la requete

        }else{

            return null;

        }
    }

    function getListTypeClient(){

        $sql = "SELECT * FROM type_client";
        if($this->db != null){// si la connexion passe
    
                return $this->db->query($sql);//on execute la requete
    
            }else{
    
                return null;
    
            }
       }
    
       function getListAgence(){
    
            $sql = "SELECT * FROM agence";
            if($this->db != null){// si la connexion passe
    
                return $this->db->query($sql);//on execute la requete
    
            }else{
    
                return null;
    
            }
           }
    
       function getListTypeComte(){
            $sql = "SELECT * FROM type_compte";
            if($this->db != null){// si la connexion passe
    
                return $this->db->query($sql);//on execute la requete
    
            }else{
    
                return null;
    
            }
       }
    
}
?>