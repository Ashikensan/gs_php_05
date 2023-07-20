<?php  
class Person{
    public $name = "ゲストの皆さん";

    public function sayHello(){
        echo "こんにちは". $this->name;
    }
}
$person = new Person();
$person->sayHello();