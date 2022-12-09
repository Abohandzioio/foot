<?php

class equipe
{

    private $nom_equipe;
    
    
    public function __construct($nom_equipe = 0)
    {
        $this->nom_equipe = $nom_equipe;
    }

    /**
     *
     * @return mixed
     */
    public function getNom_equipe()
    {
        return $this->nom_equipe;
    }

     

    /**
     *
     * @param mixed $nom_equipe
     */
    public function setNom_equipe($nom_equipe)
    {
        $this->id = $nom_equipe;
    }

   

    
}

