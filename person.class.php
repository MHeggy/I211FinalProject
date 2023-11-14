<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: person.class.php
 * Description: File defining the Person Class for Lab07.
 */

class Person {//start of Person class

    //declaring variables.
    private $first_name;

    private $last_name;

    //start of constructor.
    public function __construct($first_name, $last_name) {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
    }//end of constructor

    //getters and setters.
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }

    //setters.
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    //toString() method.
    public function toString() {
        echo "<h3>" . $this->getFirstName() . "<h3>";
        echo "<br><h3>" . $this->getLastName()  . "</h3>";
    }//end of toString() method.
}//end of Person Class.