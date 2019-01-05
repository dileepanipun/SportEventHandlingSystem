<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 6:31 PM
 */


require_once __DIR__."/../core/Payment.php";


interface PaymentBusiness
{
    public function addPayment(Payment $payment):bool ;

    public function deletePayment(string $paymentID):bool ;

    public function updatePayment(Payment $payment):bool ;

    public function searchPayment(string $paymentID):array ;

    public function getAllPayments():array ;
}