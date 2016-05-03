<?php
session_start();
$_SESSION['aliveCells'] = [];

require "../../vendor/autoload.php";
use gameOfLife\Classes\BoardDrawer;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $BoardHeight = $_POST['BoardHeight'];
    $BoardWidth = $_POST['BoardWidth'];
    if ($BoardHeight == 0 || $BoardWidth == 0) {
        echo "<h3>Żadna z wartości nie może równać się zero.</h3>";
    }
    if (!isset($_SESSION['aliveCells']))
    {
        $_SESSION['aliveCells'] = [];
    }
    $_SESSION['aliveCells'][] = $BoardHeight;
    $_SESSION['aliveCells'][] = $BoardWidth;

    echo BoardDrawer::drawBoard($_SESSION['aliveCells']);
}