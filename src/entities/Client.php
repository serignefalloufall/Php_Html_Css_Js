<?php
namespace src\entities;

    class Client
    {
        //Definition des attributs
        private $id;
        private $nom;
        private $prenom;
        private $adresse;
        private $tel;
        private $email;
        private $profession;
        private $salaire;
        private $password;
        private $type_client_id;
        private $employeur_id;

         //Definition des constructeur
        public function __construct()
        {
    
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of profession
         */ 
        public function getProfession()
        {
                return $this->profession;
        }

        /**
         * Set the value of profession
         *
         * @return  self
         */ 
        public function setProfession($profession)
        {
                $this->profession = $profession;

                return $this;
        }

        /**
         * Get the value of salaire
         */ 
        public function getSalaire()
        {
                return $this->salaire;
        }

        /**
         * Set the value of salaire
         *
         * @return  self
         */ 
        public function setSalaire($salaire)
        {
                $this->salaire = $salaire;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of type_client_id
         */ 
        public function getType_client_id()
        {
                return $this->type_client_id;
        }

        /**
         * Set the value of type_client_id
         *
         * @return  self
         */ 
        public function setType_client_id($type_client_id)
        {
                $this->type_client_id = $type_client_id;

                return $this;
        }

        /**
         * Get the value of employeur_id
         */ 
        public function getEmployeur_id()
        {
                return $this->employeur_id;
        }

        /**
         * Set the value of employeur_id
         *
         * @return  self
         */ 
        public function setEmployeur_id($employeur_id)
        {
                $this->employeur_id = $employeur_id;

                return $this;
        }
    }

?>