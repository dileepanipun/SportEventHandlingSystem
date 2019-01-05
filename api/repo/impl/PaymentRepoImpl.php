<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 7:14 PM
 */

class PaymentRepoImpl implements PaymentRepo
{

    public function setConnection(mysqli $connection): void
    {
        // TODO: Implement setConnection() method.
    }

    public function addPayment(Payment $payment): bool
    {
        // TODO: Implement addPayment() method.
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