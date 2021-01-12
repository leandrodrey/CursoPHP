<?php

class Mariano {

    public function sayHello() {
        return 'hello';
    }
}

$mariano = new Mariano();
echo $mariano->sayHello() . "\n \n";

$mariano = new Mariano();
echo $mariano->sayHello() . "\n \n";
/*
 *  What is the output in the command line for this code ?
 *
 *  Your answer: hello
 *
 *  What is the output if you run this code twice? Commit a change if you think that you can improve it.
 *
 *  Your answer: va a decir hello dos veces.
 *
 */

class Mariano {

    public function sayHello($saludo, $name) {
        echo "$saludo $name <br>";
    }
}

$mariano = new Mariano();
$mariano->sayHello("Hola como estás", "Leandro");

/* Después otros improvements que le haría serían similares a los que se plantean en el ejercicio 2, agregando el nombre de la persona. Otro solución podría ser ejecutar el echo en el método */
