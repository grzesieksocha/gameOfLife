<?php

//namespace gameOfLife\Classes;

class Cell
{
    private $isAlive;
    private $numberOfNeighbours;

    /**
     * Cell constructor.
     * @param boolean $isAlive
     */
    public function __construct($isAlive)
    {
        $this->isAlive = $isAlive;
        $this->numberOfNeighbours = 0;
    }

    public function checkCellNeighbours($coordinates, $j, $k)
    {
        for ($rowCheck = $j - 1; $rowCheck <= $j + 1; $rowCheck++) {
            for ($columnCheck = $k - 1; $columnCheck <= $k + 1; $columnCheck++) {
               if (!(($rowCheck == $j) && ($columnCheck == $k))) {
                   if (in_array($rowCheck . "," . $columnCheck, $coordinates)) {
                       $this->addNeighbour();
                   }
               }
            }
        }
    }

    private function addNeighbour()
    {
        $this->numberOfNeighbours++;
    }

    public function defineState()
    {
        if ($this->isAlive == true && (($this->numberOfNeighbours <= 1) || ($this->numberOfNeighbours >=4)))
        {
            $this->changeState();
        } elseif ($this->isAlive == false && ($this->numberOfNeighbours == 3)) {
            $this->changeState();
        }
    }

    private function changeState()
    {
        if ($this->isAlive) {
            $this->isAlive = false;
        } else {
            $this->isAlive = true;
        }
    }

    /**
     * @return boolean
     */
    public function isAlive()
    {
        return $this->isAlive;
    }

    public function setIsAlive($state)
    {
        $this->isAlive = $state;
    }
    
    /**
     * @return int
     */
    public function getNumberOfNeighbours()
    {
        return $this->numberOfNeighbours;
    }

    /**
     * @param int $numberOfNeighbours
     */
    public function setNumberOfNeighbours($numberOfNeighbours)
    {
        $this->numberOfNeighbours = $numberOfNeighbours;
    }
    
    
}