<?php

class ProductMatch extends AmazonQuery {

    protected $action;
    protected $searchTerm;

    public function __construct() {
        $this->action = 'GetMatchingProduct';
    }

    public function setItem($searchTerm) {
        $this->searchTerm = $searchTerm;
    }

}