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

            if(isset($_POST['btnAjouter']))
            {
                echo 1;
                extract($_POST);
                //var_dump($_POST);

                if($_POST['type_client_id'] == '8')
                {
                    //8 represente typeclient entreprise au niveau de la base

                    $employeurObject->setNumIdentification($numIdentification);

                    $employeurObject->setRaisonSocial($raisonSocial);

                    $employeurObject->setNom_employeur($nom_employeur);

                    $employeurObject->setAdresse_employeur($adresse_employeur);

                    $resultat = $clientdb->addEmployeur($employeurObject);

                    return $this->view->load("client/add");

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

                    return $this->view->load("client/add");
   
                }else if($_POST['type_client_id'] == '7')
                {
                    //7 represente typeclient non salarie au niveau de la base

                    $clientObject->setNom($nom);

                    $clientObject->setPrenom($prenom);

                    $clientObject->setAdresse($adresse);

                    $clientObject->setTel($tel);

                    $clientObject->setEmail($email);

                    $resultat = $clientdb->addClientNonSalarie($clientObject);

                    return $this->view->load("client/add");


                }
            } 
            $this->view->load("client/add");
        }  
    }
?>