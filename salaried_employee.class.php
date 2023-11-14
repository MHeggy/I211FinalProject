<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: salaried_employee.class.php
 * Description: File defining the SalariedEmployeeClass.
 */

class SalariedEmployee extends Employee {//start of class.
    //declaring private variable weekly_salary.
    private $weekly_salary;
    //constructor.
    public function __construct(Person $person, $ssn, $weekly_salary) {
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
    }//end constructor.

    //getters and setters.
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function setWeeklySalary($weekly_salary) {
        $this->weekly_salary = $weekly_salary;
    }
    public function getPaymentAmount()
    {
        return $this->getWeeklySalary();
    }
    //toString()
    public function toString() {
        $salariedDetails = "Name: " . $this->getPerson()->getFirstName() . ' ' . $this->getPerson()->getLastName() . "<br>";
        $salariedDetails .= "SSN: " . $this->getSSN() . "<br>";
        $salariedDetails .= "Weekly Salary: \$" . $this->getWeeklySalary() . "<br>";
        $salariedDetails .= "Payment Amount: \$" . $this->getPaymentAmount() . "<br>";

        return $salariedDetails;
    }//end of toString() method.
}//end of class.
