<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:18 PM
 */

class DBConnection{

    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "1234";
    private $database = "sportclub";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct(){

        $this->connection = new mysqli($this->host,$this->userName,$this->password,$this->database,$this->port);

    }

    public function getDBConnection(){

        return $this->connection;

    }


}