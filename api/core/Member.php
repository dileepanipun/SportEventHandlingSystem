<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:22 PM
 */

class Member{

    private $memberID;
    private $mName;
    private $mAddress;
    private $dob;
    private $gender;
    private $telephone;
    private $weight;
    private $height;

    /**
     * Member constructor.
     * @param $memberID
     * @param $mName
     * @param $mAddress
     * @param $dob
     * @param $gender
     * @param $telephone
     * @param $weight
     * @param $height
     */
    public function __construct($memberID, $mName, $mAddress, $dob, $gender, $telephone, $weight, $height)
    {
        $this->memberID = $memberID;
        $this->mName = $mName;
        $this->mAddress = $mAddress;
        $this->dob = $dob;
        $this->gender = $gender;
        $this->telephone = $telephone;
        $this->weight = $weight;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getMemberID()
    {
        return $this->memberID;
    }

    /**
     * @param mixed $memberID
     */
    public function setMemberID($memberID): void
    {
        $this->memberID = $memberID;
    }

    /**
     * @return mixed
     */
    public function getMName()
    {
        return $this->mName;
    }

    /**
     * @param mixed $mName
     */
    public function setMName($mName): void
    {
        $this->mName = $mName;
    }

    /**
     * @return mixed
     */
    public function getMAddress()
    {
        return $this->mAddress;
    }

    /**
     * @param mixed $mAddress
     */
    public function setMAddress($mAddress): void
    {
        $this->mAddress = $mAddress;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob): void
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

}