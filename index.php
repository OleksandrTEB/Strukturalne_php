<?php

task1();
task2();
task3();
task4();
task5();
task6();
task7();


function task1(): void
{
    echo "Zadanie 1 \n";

    $num = readline("Enter number: ");

    if ($num % 2 == 0) {
        echo "Parzysrta \n\n";
    } else {
        echo "Nie parzysrta \n\n";
    }
}

function task2(): void {
    echo "Zadanie 2 \n";

    $num1 = readline("Enter first number: ");
    $num2 = readline("Enter second number: ");

    if ($num1 % $num2 == 0) {
        echo "Podzielna \n\n";
    } else {
        echo "Nie podzielna \n\n";
    }
}

function task3(): void {
    echo "Zadanie 3 \n";

    $num = readline("Enter number: ");

    if ($num >= 1 && $num <= 10) {
        echo "Liczba jest w przedziale <1,10> \n\n";
    } elseif ($num >= 17 && $num <= 21) {
        echo "Liczba jest w przedziale <17,21> \n\n";
    } else {
        echo "Liczby nie ma w przedziale \n\n";
    }
}


function task4(): void {
    echo "Zadanie 4 \n";

    $num = readline("Enter number: ");

    if ($num > 0) {
        echo "Liczba jest większa zera \n\n";
    } elseif ($num < 0) {
        echo "Liczba jest mniejsza zera \n\n";
    } else {
        echo "Liczba jest równa zera \n\n";
    }
}


function task5(): void {
    echo "Zadanie 5 \n";

    $num = readline("Enter number: ");

    if ($num < 11) {
        echo "Dziecko \n\n";
    } elseif ($num >= 11 && $num <= 17) {
        echo "Nastolatek \n\n";
    } elseif ($num >= 18) {
        echo "Dorosły \n\n";
    }
}


function task6(): void {
    echo "Zadanie 6 \n";

    $num = readline("Enter password: ");

    if (strlen($num) < 5) {
        echo "Bardzo słabe \n\n";
    } elseif (strlen($num) >= 5 && strlen($num) <= 8) {
        echo "Słabe \n\n";
    } elseif (strlen($num) >= 9 && strlen($num) <= 11) {
        echo "Silne \n\n";
    } elseif (strlen($num) > 11) {
        echo "Bardzo silne \n\n";
    }
}


echo "Pętle! \n\n";


function task7(): void {
    echo "Zadanie 2 \n";

    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 10; $j++) {
            echo "#";
        }
        echo "\n";
    }

    echo "\n\n";
}