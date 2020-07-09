<?php

    class Autoloader{

        static function register(){

            spl_autoload_register(array(__CLASS__, "autoload"));
            //spl_autoload_register recoit en prametre une classe 
        }

        static function autoload($class){// cette function permet la recuperation des nom des classe 

            if(file_exists("src/model/".$class.".php")){

                require_once "src/model/".$class.".php";//donc le fichier existe on l'inclu
            }
            else if(file_exists("src/controller/".$class.".php")){

                require_once "src/controller/".$class.".php";//donc le fichier existe on l'inclu


            }
            else if(file_exists(str_replace("\\","/",$class.".php")))// c a dir si on utilise les name space on remplace les \ par /
            {
                require_once str_replace("\\","/",$class.".php");
            }
            else{
                die("Merci d'utiliser le mot cle use suivie de ".$class);// si on oublie d'utiliser les use
            }
        }
    }
    Autoloader::register();// :: permet d'appeler les methodes static
?>