<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 2:18 PM
 */

class Corch
{
   private $corchID;
   private $corchName;
   private $address;
   private $nicNo;

    /**
     * Corch constructor.
     * @param $corchID
     * @param $corchName
     * @param $address
     * @param $nicNo
     */
    public function __construct($corchID, $corchName, $address, $nicNo)
    {
        $this->corchID = $corchID;
        $this->corchName = $corchName;
        $this->address = $address;
        $this->nicNo = $nicNo;
    }

    /**
     * @return mixed
     */
    public function getCorchID()
    {
        return $this->corchID;
    }

    /**
     * @param mixed $corchID
     */
    public function setCorchID($corchID): void
    {
        $this->corchID = $corchID;
    }

    /**
     * @return mixed
     */
    public function getCorchName()
    {
        return $this->corchName;
    }

    /**
     * @param mixed $corchName
     */
    public function setCorchName($corchName): void
    {
        $this->corchName = $corchName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getNicNo()
    {
        return $this->nicNo;
    }

    /**
     * @param mixed $nicNo
     */
    public function setNicNo($nicNo): void
    {
        $this->nicNo = $nicNo;
    }

}