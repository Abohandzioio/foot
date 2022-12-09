<?php

class personne
{

    private $id_user;
    private $prenom;
    private $nom;
    private $sexe;
    private $login;
    private $mdp;
    private $ville;
    private $role;

    public function __construct($id_user = 0, $prenom = "", $nom= "", $sexe = "", $login = "", 
    $mdp= "", $ville = "",  $role="" )
    {
        $this->id = $id_user;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->ville = $ville;
        $this->role = $role;
        
        
    }

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

     /**
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }


     /**
     *
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }


    /**
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }


    /**
     *
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }


     /**
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }


     /**
     *
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

   

     /**
     *
     * @param mixed $id_user
     */
    public function setId_user($id_user)
    {
        return $this->id_user;
    }

    /**
     *
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        return $this->prenom;
    }

     /**
     *
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        return $this->nom;
    }


     /**
     *
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        return $this->sexe;
    }


    /**
     *
     * @param mixed $login
     */
    public function setLogin($login)
    {
        return $this->login;
    }


    /**
     *
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        return $this->mdp;
    }


     /**
     *
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        return $this->ville;
    }


     /**
     *
     * @param mixed $role
     */
    public function setRole($role)
    {
        return $this->role;
    }
}

