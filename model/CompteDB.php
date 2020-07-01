<?php

//Cette fonction permet d'ajouter un compte epargne
function addCompteEpargne($num_compte, $agence_id, $cle_rip, $frais_ouverture, $date_ouverture, $type_compte_id, $client_id){

    $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,type_compte_id,client_id)
            VALUES('$num_compte', '$agence_id', '$cle_rip', '$frais_ouverture', '$date_ouverture', '$type_compte_id', '$client_id')";
           return executeSQL($sql);                    
   }
  
   //Cette fonction permet d'ajouter un compte courant
   function addCompteCourant($num_compte, $agence_id, $cle_rip, $agio, $date_ouverture, $type_compte_id, $client_id){

        $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, agio,date_ouverture,type_compte_id,client_id)
        VALUES('$num_compte', '$agence_id', '$cle_rip', '$agio','$date_ouverture','$type_compte_id', '$client_id')";
       return executeSQL($sql); 
                        
       }
       
        //Cette fonction permet d'ajouter un compte courant
        function addCompteBloque($num_compte, $agence_id, $cle_rip, $frais_ouverture, $date_ouverture, $date_fermuture, $type_compte_id, $client_id){

                $sql = "INSERT INTO compte(num_compte, agence_id, cle_rip, frais_ouverture,date_ouverture,date_fermuture, type_compte_id,client_id)
                VALUES('$num_compte', '$agence_id', '$cle_rip', '$frais_ouverture','$date_ouverture', '$date_fermuture', '$type_compte_id', '$client_id')";
               return executeSQL($sql); 
                                
               }
 
   function getListAgence(){

        $sql = "SELECT * FROM agence";
                return executeSQL($sql);
       }
       function getListTypeComte(){

        $sql = "SELECT * FROM type_compte";
                return executeSQL($sql);
       }
    


?>