<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/18/2023
 * File Name: test_payable.php
 * Description: Interface to test all classes.
 */

//require statements
require_once 'person.class.php';
require_once 'employee.class.php';
require_once 'payable.class.php';
require_once 'hourly_employee.class.php';
require_once 'salaried_employee.class.php';
require_once 'commission_employee.class.php';
require_once 'base_plus_commision.class.php';
require_once 'invoice.class.php';

//invoice.
$i1 = new Invoice(12, "Red Barstool", 3, 45);

//invoice 2.
$i2 = new Invoice(19, "phone", 1, 600);

//starting with the Hourly Employee class.
$h1 = new HourlyEmployee(new Person("John", "Doe"), "111-11-1111", 20, 15);

//salaried employee.
$s1 = new SalariedEmployee(new Person("Sally", "Jane"), "111-11-1111", 1400);

//commission instance employee.
$c1 = new CommissionEmployee(new Person("Janey", "Janice"), "111-11-1111", 40, 12);

//BasePlusCommission instance.
$b1 = new BasePlusCommission(new Person("Jonathan", "Hanks"), "111-11-1111", 12, 14, 25);

//putting all employees and invoices in an array.
$payables = array($h1, $s1, $c1, $b1, $i1, $i2);

function printPayables(Payable $payable) {
    if(get_class($payable) == "Invoice") {
        echo "<b>Invoice</b><br>";
    }
    if (get_class($payable) == "SalariedEmployee") {
        echo "<b>Salaried Employee</b><br>";
    }
    if(get_class($payable) == "CommissionEmployee") {
        echo  "<b>Commission Employee</b><br>";
    }
    if(get_class($payable) == "HourlyEmployee") {
        echo "<b>Hourly Employee</b><br>";
    }
    if (get_class($payable) == "BasePlusCommission") {
        echo "<b>Base Plus Commisssion Employee:</b><br>";
    }
    echo $payable->toString();
}
foreach($payables as $payable) {
    echo "*****************************************************<br>";
    printPayables($payable);
}

//Displaying the total invoice and employee counts.
echo "*****************************************************<br>Employee Count: " . Employee::getEmployeeCount() . "<br>";
echo "Invoice Count: " . Invoice::getInvoiceCount();


