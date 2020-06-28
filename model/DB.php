<?php

//Cette function permet de se connecter a la base de donnee
    function getConnexion(){
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_banque";

        return mysqli_connect($servername, $username, $password, $dbname);
    }

    //Cette function permet d'executer les requet sql
    function executeSQL($sql){
        
       $connexion = getConnexion();

        return mysqli_query($connexion, $sql);
    }


?>