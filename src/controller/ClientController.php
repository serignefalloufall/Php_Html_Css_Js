<?php
namespace src\controller; // ici on a definit un namespace

use libs\system\Controller;
use src\entities\Employeur;
use src\entities\Client;
use src\model\ClientDB;

   class ClientController extends Controller
   {
        public function __construct(){
            parent::__construct();//pour faire appelle a notre constructeur parent qui se trouve dans la classe DB
        }
        
        public function add()
        {
            $employeurObject = new Employeur();//ici on cree un objet 

            $clientObject = new Client();//ici on cree un objet 

            $clientdb = new ClientDB();// l'objet $clientdb c pour acceder au methode qui se trouve class TestDB

            $data['listeTypeClient'] = $clientdb->getListTypeClient();
            $data['listeEmployeur'] = $clientdb->getListEmployeur();
           
            if(isset($_POST['btnAjouter']))
            {
                extract($_POST);
                //var_dump($_POST);
                //die();
                if($_POST['type_client_id'] == '8')
                {
                    //8 represente typeclient entreprise au niveau de la base

                    $employeurObject->setNumIdentification($numIdentification);

                    $employeurObject->setRaisonSocial($raisonSocial);

                    $employeurObject->setNom_employeur($nom_employeur);

                    $employeurObject->setAdresse_employeur($adresse_employeur);

                    $resultat = $clientdb->addEmployeur($employeurObject);

                    $data['ok'] = $resultat;
                    //echo $data['ok'];
                    //die();

                    return $this->view->load("client/add", $data);

                }else if($_POST['type_client_id'] == '6')
                {
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

                     $data['ok'] = $resultat;

                     return $this->view->load("client/add", $data);

                }else if($_POST['type_client_id'] == '7')
                {
                     //7 represente typeclient non salarie au niveau de la base

                     $clientObject->setNom($nom);

                     $clientObject->setPrenom($prenom);
 
                     $clientObject->setAdresse($adresse);
 
                     $clientObject->setTel($tel);
 
                     $clientObject->setEmail($email);
 
                     $resultat = $clientdb->addClientNonSalarie($clientObject);

                     $data['ok'] = $resultat;

                     return $this->view->load("client/add", $data);
                }
              
            }else{

                return $this->view->load("client/add", $data);

            }
           
        }  
    }
?>