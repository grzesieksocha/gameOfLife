<?php

use gameOfLife\Classes\Board;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game of Life</title>
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="boardSize">
        <form class="form-group form-inline">
            <label for="height">Wysokość: </label>
            <input class="form-control" type="number" name="height" id="height">
            <label for="width">Szerokość: </label>
            <input class="form-control" type="number" name="width" id="width">
            <input type="button" class="btn btn-success" value="Wygeneruj">
        </form>
    </div>
</div>
</body>
</html>