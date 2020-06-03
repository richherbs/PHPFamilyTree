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

    function depthFirstSearch(FamilyMember $rootFamilyMember, FamilyMember $searchedPerson)
    {

        echo $rootFamilyMember->getName() . '<br>';

        if($rootFamilyMember->getName() === $searchedPerson->getName()) return true;

        if($rootFamilyMember->getMum()) depthFirstSearch($rootFamilyMember->getMum(), $searchedPerson);
        
        if($rootFamilyMember->getDad()) depthFirstSearch($rootFamilyMember->getDad(), $searchedPerson);

        return false;
    }

    function breadthFirstSearch(FamilyMember $rootFamilyMember, FamilyMember $searchedPerson, array $queue){

        if($rootFamilyMember->getName() === $searchedPerson->getName()){
            echo $rootFamilyMember->getName() . '<br>';
            return true;
        }

        if($rootFamilyMember->getMum()) array_push($queue, $rootFamilyMember->getMum());

        if($rootFamilyMember->getDad()) array_push($queue, $rootFamilyMember->getDad());

        if(!empty($queue)){
            echo $rootFamilyMember->getName() . '<br>';
            $next_person = array_shift($queue);
            breadthFirstSearch($next_person, $searchedPerson, $queue);
        }

        return false;
    }
}