<?php

class achat
{

    private $id_user;
    private $id_rencontre;
    private $date_achat;
    
    public function __construct($id_user = 0, $id_rencontre = "", $date_achat = "")
    {
        $this->id_user = $id_user;
        $this->id_rencontre = $id_rencontre;
        $this->date_achat = $date_achat;
    }

    /**
     *
     * @return mixed
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     *
     * @return mixed
     */
    public function getId_rencontre()
    {
        return $this->id_rencontre;
    }

    /**
     *
     * @return mixed
     */
    public function getDate_achat()
    {
        return $this->date_achat;
    }

  

    /**
     *
     * @param mixed $id_rencontre
     */
    public function setId_rencontre($id_rencontre)
    {
        $this->id = $id_rencontre;
    }

    /**
     *
     * @param mixed $id_user
     */
    public function setId_user($id_user)
    {
        $this->id = $id_user;
    }

   /**
     *
     * @param mixed $date_achat
     */
    public function setDate_achat($date_achat)
    {
        $this->id = $date_achat;
    }

    
}

