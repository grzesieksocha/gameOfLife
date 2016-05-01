<?php
session_start();

require "../Classes/BoardDrawer.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $height = $_POST['height'];
    $width = $_POST['width'];
    if ($height == 0 || $width == 0) {
        echo "<h3>Żadna z wartości nie może równać się zero.</h3>";
    }
    if (!isset($_SESSION['aliveCells']))
    {
        $_SESSION['aliveCells'] = [];
    }
    $_SESSION['aliveCells'][] = $height;
    $_SESSION['aliveCells'][] = $width;

    echo BoardDrawer::drawBoard($_SESSION['aliveCells']);
}