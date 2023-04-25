<?php
namespace App\models;

use App\Models\Model;

class UtilisateurModel extends Model{
    protected $id;
    protected $nom_prenom;
    protected $email;
    protected $pass;

    public function __construct()
    {   
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $this->table = strtolower(str_replace('Model','',$class));
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
     * Get the value of nom_prenom
     */ 
    public function getNom_prenom()
    {
        return $this->nom_prenom;
    }

    /**
     * Set the value of nom_prenom
     *
     * @return  self
     */ 
    public function setNom_prenom($nom_prenom)
    {
        $this->nom_prenom = $nom_prenom;

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
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
}



?>