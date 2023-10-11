<?php
class Person {
    public $firstName;
    public $lastName;
    public $dateOfBirth;
    
    public function __construct($firstName, $lastName, $dateOfBirth) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge() {
        $dob = new DateTime($this->dateOfBirth);
        $now = new DateTime();
        $age = $now->diff($dob)->y;
        return $age;
    }
}
$person = new Person("João", "Sauer", "1994-01-17");
echo "Full Name: " . $person->getFullName() . "<br>";
echo "Age: " . $person->getAge() . " years old<br>";
?>
