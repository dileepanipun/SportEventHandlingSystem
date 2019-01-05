<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 2:46 PM
 */

class Payment
{
   private $payid;
   private $date;

    /**
     * @return mixed
     */
    public function getPayid()
    {
        return $this->payid;
    }

    /**
     * @param mixed $payid
     */
    public function setPayid($payid): void
    {
        $this->payid = $payid;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

}