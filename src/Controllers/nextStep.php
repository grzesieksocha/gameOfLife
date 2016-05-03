<?php
session_start();
require "../../vendor/autoload.php";
use gameOfLife\Classes\Player;
use gameOfLife\Classes\BoardDrawer;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $game = new Player(1, $_SESSION['aliveCells']);
    $_SESSION['aliveCells'] = $game->play();
    echo BoardDrawer::drawBoard($_SESSION['aliveCells']);
}