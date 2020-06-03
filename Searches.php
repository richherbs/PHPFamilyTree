<?php

function depthFirstSearch(FamilyMember $aFamilyMember, string $searchedPerson) :?FamilyMember
{

    $foundPerson = null;

    echo $aFamilyMember->getName() . '<br>';

    if($aFamilyMember->getName() === $searchedPerson) return $aFamilyMember;

    if($aFamilyMember->getMum()) $foundPerson = depthFirstSearch($aFamilyMember->getMum(), $searchedPerson);
    
    if($aFamilyMember->getDad()) $foundPerson = depthFirstSearch($aFamilyMember->getDad(), $searchedPerson);

    return $foundPerson;
}

function breadthFirstSearch(FamilyMember $rootFamilyMember, string $searchedPerson, array $queue){

    $foundPerson = null;

    if($rootFamilyMember->getName() === $searchedPerson){
        echo $rootFamilyMember->getName() . '<br>';
        return $rootFamilyMember;
    }

    if($rootFamilyMember->getMum()) array_push($queue, $rootFamilyMember->getMum());

    if($rootFamilyMember->getDad()) array_push($queue, $rootFamilyMember->getDad());

    if(!empty($queue)){
        echo $rootFamilyMember->getName() . '<br>';
        $next_person = array_shift($queue);
        $foundPerson = breadthFirstSearch($next_person, $searchedPerson, $queue);
    }

    return $foundPerson;
}

function breadthFirstSearchNoGlobalQueue(FamilyMember $rootFamilyMember, string $searchedPerson) :?FamilyMember
{

    $queue[] = $rootFamilyMember;

    while(!empty($queue)){

       $next_person = array_shift($queue);
       echo $next_person->getName() . '<br>';
       
       if($next_person->getName() === $searchedPerson){
           return $next_person;
       }

       if($next_person->getMum()) array_push($queue, $next_person->getMum());

       if($next_person->getDad()) array_push($queue, $next_person->getDad());
    }

    return false;
}