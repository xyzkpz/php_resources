<?php

    /*
     *  = - Assignment Operator used to assign values
     *  += - Add Assignment Operator - .=
     *  -= - Subtract Assignment Operator
     *  *= - Multiple Assignment Operator
     *  /= - Divide Assignment Operator
     *  %= - Modulus Assignment Operator
     *
     */

    //Sample 1
    //Assign value 10 to variable $marks
    $marks = 10;

    //Assign any name string to variable $name
    $name = "John, Smith";

    // Use += operator
    $counter = 1;
    $counter = $counter + 1;
    $counter += 1;
    echo $counter . PHP_EOL;

    $name1 = "kishan";
    echo $name1  . PHP_EOL;
    $name1 .= ", ";
    echo $name1  . PHP_EOL;
    $name1 .= "kirti";
    echo $name1  . PHP_EOL;
    $name1 .= ", ";
    echo $name1  . PHP_EOL;
    $name1 .= "panchal";
    echo $name1  . PHP_EOL;

    //Sample 2
    // Use -=
    $counter = 10;
    $counter = $counter - 1;
    echo $counter . PHP_EOL;
    $counter -= 1;
    echo $counter . PHP_EOL;
    $counter -= 1;
    echo $counter . PHP_EOL;

    // Use *= Operators
    $square = 10;
    $square *= $square;
    echo $square . PHP_EOL;
    $square *= $square;
    echo $square . PHP_EOL;
