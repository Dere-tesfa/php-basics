<?php
//Defining a class in PHP using the class keyword.
// A class is a blueprint for creating objects.
// It can contain properties (variables) and methods (functions) that define the behavior of the objects created from the class.
// Syntax:
// class ClassName{
//     // properties and methods
// }

//function __construct() is a special method in PHP classes that is automatically called when an object of the class is created.
    // It is used to initialize the object's properties and perform any setup tasks required for the object.
    // The constructor method is defined using the __construct() name and can accept parameters to initialize
    
class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

}
$person=new Person("Dereje",25);
var_dump($person);
echo $person->name."<br>";
echo $person->age."<br>";

?>