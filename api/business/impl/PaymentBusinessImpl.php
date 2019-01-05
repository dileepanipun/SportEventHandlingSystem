<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 6:31 PM
 */


require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Payment.php";
require_once __DIR__."/../PaymentBusiness.php";
require_once __DIR__ . "/../../repo/impl/PaymentRepoImpl.php";


class PaymentBusinessImpl implements PaymentBusiness
{

    public function addPayment(Payment $payment): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $paymentRepo = new PaymentRepoImpl();
        $paymentRepo->setConnection($connection);

        return $paymentRepo->addPayment($payment);
    }

    public function deletePayment(string $paymentID): bool
    {
        // TODO: Implement deletePayment() method.
    }

    public function updatePayment(Payment $payment): bool
    {
        // TODO: Implement updatePayment() method.
    }

    public function searchPayment(string $paymentID): array
    {
        // TODO: Implement searchPayment() method.
    }

    public function getAllPayments(): array
    {
        // TODO: Implement getAllPayments() method.
    }
}