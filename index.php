<?php
// // Zadanie 1
// $num = readline("Enter number: \n");

// if($num % 2 == 0) {
//     echo "Liczba jest parzysrta \n";
// } else {
//     echo "Liczba jest nie parzysrta\n";
// }

// // Zadanie 2

// $num1 = readline("Enter first number: \n");
// $num2 = readline("Enter second number: \n");

// if($num1 % $num2 == 0) {
//     echo "Podzielna";
// } else {
//     echo "Nie podzielna";
// }

// echo "Zadanie 3 \n";

// // Napisz program sprawdzający czy liczba jest z przedziału <1,10> lub <17,21>;

// $zad3_num = readline("Enter number: \n");

// if($zad3_num >= 1 && $zad3_num <= 10) {
//     echo "Liczba jest w przedziale <1,10>\n";
// } elseif($zad3_num >= 17 && $zad3_num <= 21) {
//     echo "Liczba jest w przedziale <17,21>\n";
// } else {
//     echo "Liczby nie ma w przedziale\n";
// }

// echo "Zadanie 4 \n";

// $zad4_num = readline("Enter number: \n");

// if($zad4_num > 0) {
//     echo "Liczba jest większa zera \n";
// } elseif($zad4_num < 0) {
//     echo "Liczba jest mniejsza zera \n";
// } else {
//     echo "Liczba jest równa zera \n";
// }

// echo "Zadanie 5 \n";

// $zad5_num = readline("Enter number: \n");

// if($zad5_num < 11) {
//     echo "Dziecko \n";
// } elseif($zad5_num >= 11 && $zad5_num <= 17) {
//     echo "Nastolatek \n";
// } elseif($zad5_num >= 18) {
//     echo "Dorosły \n";
// }

//Sprawdzający siłę hasła.
//Mniej niż 5: bardzo słabe;
//Między 5 i 8: słabe;
//Między 9 i 11: silne;
//Ponad 11: bardzo silne;

// echo "Zadanie 6 \n";

// $zad6_num = readline("Enter password: \n");

// if(strlen($zad6_num) < 5) {
//     echo "Bardzo słabe \n";
// } elseif(strlen($zad6_num) >= 5 && strlen($zad6_num) <= 8) {
//     echo "Słabe \n";
// } elseif(strlen($zad6_num) >= 9 && strlen($zad6_num) <= 11) {
//     echo "Silne \n";
// } elseif(strlen($zad6_num) > 11) {
//     echo "Bardzo silne \n";
// }

echo "Pętle \n";

// echo "Zadanie 2 \n";

// for($i = 0; $i < 2; $i++) {
//     for($j = 0; $j < 10; $j++) {
//         echo "#";
//     }
//     echo "\n";
// }

echo "Zadanie 3 \n";

// Za pomocą pętli for, while i do… while napisz skrypt, który będzie zwiększał zmienną $i od 1 do 100 o 2, a następnie zmniejszał ją do 1 o 4.