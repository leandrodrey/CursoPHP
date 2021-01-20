<?php

class Greeter {

    private static $prefix = 'Hello, my name is ';
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello() {
        return self::$prefix . $this->name;
    }
}
$mariano = new Greeter('Mariano');
echo $mariano->sayHello() . "\n \n";
$matu = new Greeter('Matu');
echo $matu->sayHello() . "\n \n";

/*
 * Homework
 *
 * What is the output of this class ?
 *
 * Your answer:
 * Hello, my name is Mariano
 * Hello, my name is Matu
 *
 *
 * Did it suffer any changes from it latest versions?
 *
 * Your answer: Ahora por defecto vamos a tener el saludo guardado en un atributo estatico. Usamos self:: para acceder al valor de este atributo. Esto permitiría que se cambie el saludo por defecto.
 *
 * Did the behaviour remain the same ?
 *
 * Your answer: Sí
 *
 */
