<?php
session_start();
require "../Classes/Player.php";
require "../Classes/BoardDrawer.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $game = new Player(1, $_SESSION['aliveCells']);
    $_SESSION['aliveCells'] = $game->play();
    echo BoardDrawer::drawBoard($_SESSION['aliveCells']);
}