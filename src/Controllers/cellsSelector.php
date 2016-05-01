<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $coordinates = $_POST['coordinates'];
    if (!isset($_SESSION['aliveCells']))
    {
        $_SESSION['aliveCells'] = [];
    }
    if (!in_array($coordinates, $_SESSION['aliveCells'])) {
        $_SESSION['aliveCells'][] = $coordinates;
    } else {
        $key = array_search($coordinates, $_SESSION['aliveCells']);
        unset($_SESSION['aliveCells'][$key]);
    }
    echo json_encode($_SESSION['aliveCells']);
}