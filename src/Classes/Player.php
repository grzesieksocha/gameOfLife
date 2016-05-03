<?php

namespace gameOfLife\Classes;

class Player
{
    private $numberOfSteps;
    private $boardData;
    private $tempBoardData = [];

    /**
     * Player constructor.
     * @param $numberOfSteps
     * @param $boardData
     */
    public function __construct($numberOfSteps, $boardData)
    {
        $this->numberOfSteps = $numberOfSteps;
        $this->boardData = $boardData;
        $this->tempBoardData[] =  $boardData[0];
        $this->tempBoardData[] = $boardData[1];
    }

    public function play()
    {
        for ($i = 0; $i < $this->numberOfSteps; $i++) {
            $this->changeCellsStatus();
            $this->boardData = $this->tempBoardData;
            $this->tempBoardData = [];
            $this->tempBoardData[] = $this->boardData[0];
            $this->tempBoardData[] = $this->boardData[1];
            return $this->boardData;
        }
    }

    private function changeCellsStatus() {
        for ($j = 0; $j < $this->boardData[0]; $j++) {
            for ($k = 0; $k < $this->boardData[1]; $k++) {
                $cell = $this->createCell($j, $k);
                $cell->checkCellNeighbours($this->boardData, $j, $k);
                $cell->defineState();
                if ($cell->isAlive()) {
                    $this->tempBoardData[] = $j . "," . $k;
                }
            }
        }
    }
    
    private function createCell($row, $column){
        if (in_array($row . "," . $column, $this->boardData)) {
            $cell = new Cell(true);
        } else {
            $cell = new Cell(false);
        }
        return $cell;
    }
}