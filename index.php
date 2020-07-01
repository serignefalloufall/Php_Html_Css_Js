<?php

    require_once 'public/web/rooting.php';
    require_once 'public/web/menu.php';

    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case 'client/add';

            require_once 'model/DB.php';
            require_once 'model/ClientDB.php';
            //je recupere la liste des type se client et l'envoyer a add.php
            $listeTypeClient = getListTypeClient();
            $listeEmployeur = getListEmployeur();
            require_once 'view/client/add.php';
            break;

            case 'compte/add';

            require_once 'model/DB.php';
            require_once 'model/CompteDB.php';
            require_once 'model/ClientDB.php';
            $listeAgence = getListAgence();
            $listeClient = getListClient();
            $listeTypeCompte = getListTypeComte();
            

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