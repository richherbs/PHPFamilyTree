<?php

function depthFirstSearch(FamilyMember $aFamilyMember, string $searchedPerson) :?FamilyMember
{

    echo $aFamilyMember->getName() . '<br>';

    if($aFamilyMember->getName() === $searchedPerson) return $aFamilyMember;
    if($aFamilyMember->getMum()) depthFirstSearch($aFamilyMember->getMum(), $searchedPerson);
    
    if($aFamilyMember->getDad()) depthFirstSearch($aFamilyMember->getDad(), $searchedPerson);

    return null;
}

function breadthFirstSearch(FamilyMember $rootFamilyMember, FamilyMember $searchedPerson, array $queue){

    if($rootFamilyMember->getName() === $searchedPerson){
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