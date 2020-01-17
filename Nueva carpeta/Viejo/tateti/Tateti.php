<?php
    
    $ar = array();
    $ar [] = array (9,9,9);
    $ar [] = array (9,9,9);
    $ar [] = array (9,9,9);
    $a = rand (0,2);
    $b = rand (0,2);
    $vacio = 'no';
    $c = 1;

    while ($vacio == 'no')
    {
        while ($c < 10)
        {
            while ($ar[$a][$b] == 9 || $ar[$a][$b] != 'O' || $ar[$a][$b] != 'X')
            {
            var_dump ([$a],[$b]);
            $ar[$a][$b] = 'X';
            var_dump ($ar[$a][$b]);
            echo "\n" . "\n";
            $c ++;
            $a = rand (0,2);
            $b = rand (0,2);
            break;
            }

        if ($c <10)
        {
            while ($ar[$a][$b] == 9 || $ar[$a][$b] != 'O' || $ar[$a][$b] != 'X')
            {
            var_dump ([$a],[$b]);
            $ar[$a][$b] = 'O';
            var_dump ($ar[$a][$b]);
            echo "\n" . "\n";
            $c ++;
            $a = rand (0,2);
            $b = rand (0,2);
            break;
            }
        }
            echo 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . 'vuelta' . "\n";
        }
    echo 'tablero lleno';
    $vacio = 'si';
    }
