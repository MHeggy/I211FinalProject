<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: base_plus_commision.class.php
 * Description: File Defining the BasePlusCommissionClass.
 */

class BasePlusCommission extends CommissionEmployee {//start of class.
    //setting base_salary variable.
    private $base_salary;

    //constructor.
    public function __construct(Person $person, $ssn, $commission_rate, $sales, $base_salary) {
        parent::__construct($person, $ssn, $commission_rate, $sales);
        $this->base_salary = $base_salary;
    }//end of constructor.

    //getters and setters for base_salary.
    public function getBaseSalary() {
        return $this->base_salary;
    }
    public function setBaseSalary($base_salary) {
        $this->base_salary = $base_salary;
    }
    //get Payment Amount function.
    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->getBaseSalary();
    }
    //toString() method.
    public function toString() {
        $baseCommissionDetails = parent::toString();
        $baseCommissionDetails .= "Base Salary: \$" . $this->getBaseSalary() . "<br>";

        return $baseCommissionDetails;
    }//end of toString() method.
}//end of class.