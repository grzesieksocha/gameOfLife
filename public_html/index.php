<?php
session_start();
$_SESSION['aliveCells'] = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gra w życie</title>
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="boardSizeForm">
        <form class="form-group form-inline" action="" method="post">
            <label for="height">Wysokość: </label>
            <input class="form-control height" type="number" name="height" id="height">
            <label for="width">Szerokość: </label>
            <input class="form-control width" type="number" name="width" id="width">
            <input type="button" class="btn btn-success generateButton" value="Wygeneruj">
        </form>
    </div>
    <div class="boardContainer isHidden">
        <h3>Zaznacz początkowe ustawienie</h3>
        <div class="board">
            <form class="form-group form-inline" action="" method="POST">
                <label for="numberOfSteps">Ilość kroków: </label>
                <input class="form-control" type="number" name="numberOfSteps" id="numberOfSteps">
                <input class="btn btn-success startButton" type="submit" value="START!">
            </form>
            <a class="btn btn-default"> KROK PO KROKU</a>
            <a class="btn btn-default" href="index.php"> RESTART</a>
        </div>
    </div>
</div>
</body>
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/generateBoard.js"></script>
    <script src="js/selectCells.js"></script>
</html>