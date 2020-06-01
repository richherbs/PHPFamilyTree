<?php

class FamilyTree {

    private $tree;

    function __constructor(Array $tree){
        $this->tree = $tree;
    }

    /**
     * Get the value of tree
     */ 
    public function getTree()
    {
        return $this->tree;
    }
}