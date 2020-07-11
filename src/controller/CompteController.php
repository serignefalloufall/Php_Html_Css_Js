<?php
namespace src\controller; // ici on a definit un namespace

use libs\system\Controller;
use src\entities\Compte;
use src\model\CompteDB;

   class CompteController extends Controller
   {
        public function __construct(){
            parent::__construct();//pour faire appelle a notre constructeur parent qui se trouve dans la classe DB
        }
        
        public function add()
        {
            $compteObject = new Compte();//ici on cree un objet 

            $comptedb = new CompteDB();// l'objet $comptedb c pour acceder au methode qui se trouve class TestDB

            if(isset($_POST['btnAjouter']))
            {
                extract($_POST);

                if($_POST['type_compte_id'] == '1')
                {
                  //1 represente typecompte epargne au niveau de la base
                  $compteObject->setNum_compte($num_compte);

                  $compteObject->setAgence_id($agence_id);
      
                  $compteObject->setCle_rip($cle_rip);
      
                  $compteObject->setFrais_ouverture($frais_ouverture);
      
                  $compteObject->setDate_ouverture($date_ouverture);
      
                  $compteObject->setType_compte_id($type_compte_id);
      
                  $compteObject->setClient_id($client_id);
              
                  $resultat = $comptedb->addCompteEpargne($compteObject);

                  $data['ok'] = $resultat;

                  return $this->view->load("compte/add", $data);

                }else if($_POST['type_compte_id'] == '2')
                {
                  //2 represente typecompte courant au niveau de la base
        
                  $compteObject->setNum_compte($num_compte);

                  $compteObject->setAgence_id($agence_id);

                  $compteObject->setCle_rip($cle_rip);

                  $compteObject->setAgio($frais_ouverture);

                  $compteObject->setDate_ouverture($agio);

                  $compteObject->setType_compte_id($type_compte_id);

                  $compteObject->setClient_id($client_id);
            
                  $resultat = $comptedb->addCompteCourant($compteObject);

                  $data['ok'] = $resultat;

                  return $this->view->load("compte/add", $data);

                }else if($_POST['type_compte_id'] == '3')
                {
                  //3 represente typecompte bloque au niveau de la base
          
                  $compteObject->setNum_compte($num_compte);

                  $compteObject->setAgence_id($agence_id);

                  $compteObject->setCle_rip($cle_rip);

                  $compteObject->setFrais_ouverture($frais_ouverture);

                  $compteObject->setDate_ouverture($date_ouverture);

                  $compteObject->setType_compte_id($type_compte_id);

                  $compteObject->setClient_id($client_id);
          
                  $resultat = $comptedb->addCompteBloque($compteObject);

                  $data['ok'] = $resultat;

                  return $this->view->load("client/add", $data);
                }
              
            }else{

                  return $this->view->load("client/add", $data);

            }
           
        }  
    }
?>