<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 7:04 PM
 */
require_once __DIR__."/../core/Payment.php";
interface PaymentRepo
{

    public function setConnection(mysqli $connection):void;

    public function addPayment(Payment $payment):bool ;

    public function deletePayment(string $paymentID):bool ;

    public function updatePayment(Payment $payment):bool ;

    public function searchPayment(string $paymentID):array ;

    public function getAllPayments():array ;


}