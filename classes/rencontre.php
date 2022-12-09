<?php

class rencontre
{

    private $id_rencontre;
    private $nom_equipe_a;
    private $nom_equipe_b;
    private $date_match;
    private $heure_match;
    

    public function __construct($id_rencontre = 0, $nom_equipe_a = "", $nom_equipe_b= "", $date_match = "", $heure_match = "")
    {
        $this->id_rencontre = $id_rencontre;
        $this->nom_equipe_a = $nom_equipe_a;
        $this->nom_equipe_b = $nom_equipe_b;
        $this->date_match = $date_match;
        $this->heure_match = $heure_match;
          
        
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
    public function getNom_equipe_a()
    {
        return $this->nom_equipe_a;
    }

     /**
     *
     * @return mixed
     */
    public function getNom_equipe_b()
    {
        return $this->nom_equipe_b;
    }


     /**
     *
     * @return mixed
     */
    public function getDate_match()
    {
        return $this->date_match;
    }


    /**
     *
     * @return mixed
     */
    public function getHeure_match()
    {
        return $this->heure_match;
    }


   
     /**
     *
     * @param mixed $id_rencontre
     */
    public function setId_rencontre($id_rencontre)
    {
        return $this->id_rencontre;
    }

    /**
     *
     * @param mixed $nom_equipe_a
     */
    public function setNom_equipe_a($nom_equipe_a)
    {
        return $this->nom_equipe_a;
    }

     /**
     *
     * @param mixed $nom_equipe_b
     */
    public function setNom_equipe_b($nom_equipe_b)
    {
        return $this->nom_equipe_b;
    }


     /**
     *
     * @param mixed $date_match
     */
    public function setDate_match($date_match)
    {
        return $this->date_match;
    }


    /**
     *
     * @param mixed $heure_match
     */
    public function setHeure_match($heure_match)
    {
        return $this->heure_match;
    }

   
}

