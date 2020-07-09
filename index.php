<?php

    require_once 'public/web/rooting.php';
    require_once 'public/web/menu.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/model/ClientDB.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/mes_projets/banqueProjectPhp/model/CompteDB.php';


    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case 'client/add';

            $clientdb = new ClientDB();
            //je recupere la liste des type se client et l'envoyer a add.php
            $listeTypeClient = $clientdb->getListTypeClient();
            // var_dump($listeTypeClient);
            // die();
            $listeEmployeur = $clientdb->getListEmployeur();
            require_once 'view/client/add.php';
            break;

            case 'compte/add';
            $comptedb = new CompteDB();
            $clientdb = new ClientDB();
            $listeAgence = $comptedb->getListAgence();
            $listeClient = $clientdb->getListClient();
            $listeTypeCompte = $comptedb->getListTypeComte();
            

            $today = date("d/m/y"); 
            $numcompte = 'Cmpt-'.$today; 
            $cleRip = 'Cle-rip-'.$today; 

            require_once 'view/compte/add.php';
            break;

            default:
                header("location:$base_url");
        }
    }



?>