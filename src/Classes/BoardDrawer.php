<?php

class BoardDrawer
{
    public static function drawBoard($coordinates = [])
    {
        $board = "<table>";
        for ($i = 0; $i < $coordinates[0]; $i++) {
            $board .= "<tr>";
            for ($j = 0; $j < $coordinates[1]; $j++) {
                if (in_array($i . "," . $j, $_SESSION['aliveCells'])) {
                    $board .= "<td class='alive' data-coordinates='" . $i . "," . $j . "'></td>";
                } else {
                    $board .= "<td data-coordinates='" . $i . "," . $j . "'></td>";
                }
            }
            $board .= "</tr>";
        }
        $board .= "</table>";
        return $board;
    }
}