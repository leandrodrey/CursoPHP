<?php
class Greeter {

    private $name;
    private $context;
    private static array $validContexts = ['work', 'friends', 'newPerson'];

    public function __construct(string $name, $context) {
        $this->name = $name;
        $this->context = $context;
    }

    public function setContext($context) {
        if(in_array($context, static::$validContexts)) {
            $this->context = $context;
        } else {
            $this->context = 'newPerson';
        }
    }

    private function giveInformalGreetings() {
        return "Hi!, my name is " . $this->name;
    }

    private function giveFormalGreetings() {
        return "Hello, my name is " . $this->name;
    }

    private function giveFriendsGreetings() {
        return "Hello, my name is " . $this->name;
    }

    public function sayHello() {
        switch ($this->context) {
            case "work":
                return $this->giveFormalGreetings();
            case "friends":
                return $this->giveFriendsGreetings();
            case "newPerson":
                return $this->giveInformalGreetings();
            default:
                return 'Hello, my name is ' . $this->name;
        }

        /* if ($this->context == 'work') {
            $greetings = $this->giveFormalGreetings();
        } elseif ($this->context == 'friends') {
            $greetings = $this->giveFriendsGreetings();
        } else {
            $greetings = $this->giveInformalGreetings();
        }
        return $greetings;  */
    }
}

$greeter = new Greeter("Mariano", "work");
echo $greeter->sayHello();
echo "\n";
$greeter->setContext("friends");
echo $greeter->sayHello();
echo "\n \n";
$greeter->setContext("newPerson");
echo $greeter->sayHello();
echo "\n \n";
$greeter->setContext("sarasa");
echo $greeter->sayHello();
echo "\n \n";
/*
 *
 * When changing the context from work to friends, what happened ?
 *
 * Your answer:
 *
 * When changing the context from work to friends, Did we change the behaviour of the class ?
 *
 * Your answer:
 *
 *
 * By following this design, add a new context. Commit the changes in the fork of your project
 *
 */
