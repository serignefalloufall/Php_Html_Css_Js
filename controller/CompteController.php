<?php

    require_once '../model/DB.php';
    require_once '../model/CompteDB.php';

    if(isset($_POST['btnAjouter'])){

        extract($_POST);
        //var_dump($_POST); 

        if($_POST['type_compte_id'] == '1'){
           //1 represente typecompte epargne au niveau de la base
           $resultat = addCompteEpargne($num_compte, $agence_id, $cle_rip, $frais_ouverture, $date_ouverture, $type_compte_id, $client_id);

           //echo $resultat;
           require_once '../public/web/rooting.php';
           header("location:$base_url?page=compte/add&ok=$resultat");
           
        }
        if($_POST['type_compte_id'] == '2'){
            //1 represente typecompte epargne au niveau de la base
            $resultat = addCompteCourant($num_compte, $agence_id, $cle_rip, $agio, $date_ouverture, $type_compte_id, $client_id);
            //echo $resultat;
            require_once '../public/web/rooting.php';
            header("location:$base_url?page=compte/add&ok=$resultat");
            
         }

         if($_POST['type_compte_id'] == '3'){
            //1 represente typecompte epargne au niveau de la base
            $resultat =  addCompteBloque($num_compte, $agence_id, $cle_rip, $frais_ouverture, $date_ouverture, $date_fermuture, $type_compte_id, $client_id);
            //echo $resultat;
            require_once '../public/web/rooting.php';
            header("location:$base_url?page=compte/add&ok=$resultat");
            
         }
    
    
}
?>
    