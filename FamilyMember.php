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
}