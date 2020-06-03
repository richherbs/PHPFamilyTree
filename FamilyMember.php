<?php

class FamilyMember {

    private $mum;
    private $dad;
    private $name;

    function __construct (String $name, ?FamilyMember $mum = null, ?FamilyMember $dad = null)
    {
        $this->mum = $mum;
        $this->dad = $dad;
        $this->name = $name;
    }

    /**
     * Get the value of mum
     */ 
    public function getMum()
    {
        return $this->mum;
    }

    /**
     * Get the value of dad
     */ 
    public function getDad()
    {
        return $this->dad;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    public function breadthFirstSearch(FamilyMember $searchedPerson)
    {
    
        if ($this->getName() ==  $searchedPerson->getName()){
            echo $this->getName() . '<br>';
            return;
        } 

        if($this->getMum()){
            echo $this->getName() . '<br>';
            $this->getMum()->breadthFirstSearch($searchedPerson);
        }

        if($this->getDad()){
            echo $this->getName() . '<br>';
            $this->getDad()->breadthFirstSearch($searchedPerson);
        }

        return;
    }
}