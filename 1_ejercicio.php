<?php

$a = 8;
$b = 5;
$c = 3;

echo "Variable A: $a <br>";
echo "Variable B: $b <br>";
echo "Variable C: $c <br><br>";

// Caso 1 : Todos son iguales
if ($a == $b && $b == $c) {
    echo "Todas las variables son iguales";

// Caso 2 : A y B son iguales
    } else if ($a == $b) {
    echo "A y B son iguales";
 if ($a > $c) {
    echo "A y B son mayores que C";
 } else {
    echo " A y B son menores que C";
 }

// Caso 3: A y C son iguales  
} else if ($a == $c) {
    echo "A y C son iguales";
if($a > $b) {
    echo "A y C son mayores que B";
} else {
    echo " A y C son menores que B";
}

// Caso 4: B y C son iguales
} else if ($b == $c) {
    echo " B y C son iguales";
if($b > $a) {
    echo " B y C con mayores que A";
}else {
    echo "B y C son menores que A";
}

}
// Caso 2.1 : Todas son diferentes
if ($a > $b && $a > $c) {
echo "Mayor: $a , Menor: $b , Intermedio: $c";
} else if ($b > $a && $b > $c){
echo "Mayor: $b , Menor: $c , Intermedio: $a";
} else if ($c > $b && $a > $b) {
    echo "Mayor: $c , Menor: $b , Intermedio: $a";
}
?>






