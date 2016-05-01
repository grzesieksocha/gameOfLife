<?php

namespace gameOfLife\Classes;

class Board
{
    private $aliveCells;
    
    public function __construct($aliveCells = [])
    {
        $this->aliveCells = $aliveCells;
    }

    
}