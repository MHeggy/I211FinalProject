<?php
/**
 * Author: Miles Hegeduis
 * Date: 10/10/2023
 * File Name: payable.class.php
 * Description: This is the file containing the interface with two methods in it.
 */

interface Payable {//start of interface.
    //setting two methods, getPamyentAmount() and toString() both will be blank.
    public function getPaymentAmount();

    public function toString();
}//end of interface.