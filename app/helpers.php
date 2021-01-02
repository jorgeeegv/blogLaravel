<?php



function fechaActual()
{
    $fechaActual = getdate();
    $fechaString= $fechaActual['mday'] . " / " . $fechaActual['mon'] . " / " . $fechaActual['year'];
    return ($fechaString);

}
