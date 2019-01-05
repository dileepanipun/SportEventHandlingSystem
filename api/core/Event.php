<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 2:21 PM
 */

class Event
{
   private $eventID;
   private $evtName;
   private $eventDescription;
   private $evtDate;
   private $startTime;
   private $endTime;
   private $memCount;
   private $ageRange;
   private $address;
   private $description;
   private $sportID;

    /**
     * @return mixed
     */
    public function getEventID()
    {
        return $this->eventID;
    }

    /**
     * @param mixed $eventID
     */
    public function setEventID($eventID): void
    {
        $this->eventID = $eventID;
    }

    /**
     * @return mixed
     */
    public function getEvtName()
    {
        return $this->evtName;
    }

    /**
     * @param mixed $evtName
     */
    public function setEvtName($evtName): void
    {
        $this->evtName = $evtName;
    }

    /**
     * @return mixed
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @param mixed $eventDescription
     */
    public function setEventDescription($eventDescription): void
    {
        $this->eventDescription = $eventDescription;
    }

    /**
     * @return mixed
     */
    public function getEvtDate()
    {
        return $this->evtDate;
    }

    /**
     * @param mixed $evtDate
     */
    public function setEvtDate($evtDate): void
    {
        $this->evtDate = $evtDate;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getMemCount()
    {
        return $this->memCount;
    }

    /**
     * @param mixed $memCount
     */
    public function setMemCount($memCount): void
    {
        $this->memCount = $memCount;
    }

    /**
     * @return mixed
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * @param mixed $ageRange
     */
    public function setAgeRange($ageRange): void
    {
        $this->ageRange = $ageRange;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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
}