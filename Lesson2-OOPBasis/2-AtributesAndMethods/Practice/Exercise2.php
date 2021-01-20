<?php

class PublicAttribute {
    public $firstName;
    public $lastName;
}

// When having public attributes anyone can change the values
$mariano = new PublicAttribute();
$mariano->firstName = 'Mariano';
$mariano->lastName = 'Grimaux';

// When having public attributes anyone can access the values

echo $mariano->firstName . "\n \n";
echo $mariano->lastName . "\n \n";

/*
 *  Change the values of the public attributes in the lines below.
 *  Paste here the output of the changes you've made
 */

$leandro = new PublicAttribute();
$leandro->firstName = 'Leandro';
$leandro->lastName = 'Rey';

echo $leandro->firstName . "\n \n";
echo $leandro->lastName . "\n \n";

/* Output: Leandro Rey */

// Add the code so the lines have a different output in the console.

echo $leandro->firstName . ' ' . $leandro->lastName;

/*
 * Do you think there's any way to prevent the fact that anyone can change the values of these attributes?
 * How?
 *
 * Your answer: Si hacemos el atributo privado solo se podría acceder al valor desde la clase PublicAttribute y no desde afuera.
 *
 */
