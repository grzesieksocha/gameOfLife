<?php

require '../src/Classes/Cell.php';

class CellTest extends PHPUnit_Framework_TestCase
{
    private static $sample;

    public static function setUpBeforeClass()
    {
        self::$sample = new Cell(true);
    }

    public function testConstructor()
    {
        $this->assertAttributeEquals(true, 'isAlive', self::$sample);
    }

    public function cellProvider()
    {
        return [
            [['0,1', '2,2', '1,1', '2,0'], 1, 1, 3],
            [['0,1', '2,2', '1,1', '2,0'], 0, 1, 1],
            [['0,1', '2,2', '1,1', '2,0'], 1, 0, 3],
            [['0,1', '2,2', '1,1', '2,0'], 0, 2, 2],
        ];
    }

    /**
     * @dataProvider cellProvider
     */
    public function testCheckCellNeigbours($cells, $j, $k, $result)
    {
        self::$sample->checkCellNeighbours($cells, $j, $k);
        $this->assertAttributeEquals($result, 'numberOfNeighbours', self::$sample);
        self::$sample->setNumberOfNeighbours(0);
    }

    public function neighboursProvider()
    {
        return [
            [true, 4, false],
            [false, 3, true],
            [false, 2, false],
        ];
    }

    /**
     * @dataProvider neighboursProvider
     */
    public function testDefineState($begin, $neighbours, $result)
    {
        self::$sample->setIsAlive($begin);
        self::$sample->setNumberOfNeighbours($neighbours);
        self::$sample->defineState();
        $this->assertAttributeEquals($result, 'isAlive', self::$sample);
        self::$sample->setNumberOfNeighbours(0);
    }
    
    public static function tearDownAfterClass()
    {
        self::$sample = null;
    }
}