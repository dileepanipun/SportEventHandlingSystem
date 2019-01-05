<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 2:47 PM
 */

class Sport
{
   private $sportID;
   private $sportName;
   private $fee;

    /**
     * Sport constructor.
     * @param $sportID
     * @param $sportName
     * @param $fee
     */
    public function __construct($sportID, $sportName, $fee)
    {
        $this->sportID = $sportID;
        $this->sportName = $sportName;
        $this->fee = $fee;
    }

    /**
     * @return mixed
     */
    public function getSportID()
    {
        return $this->sportID;
    }

    /**
     * @param mixed $sportID
     */
    public function setSportID($sportID): void
    {
        $this->sportID = $sportID;
    }

    /**
     * @return mixed
     */
    public function getSportName()
    {
        return $this->sportName;
    }

    /**
     * @param mixed $sportName
     */
    public function setSportName($sportName): void
    {
        $this->sportName = $sportName;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param mixed $fee
     */
    public function setFee($fee): void
    {
        $this->fee = $fee;
    }

}