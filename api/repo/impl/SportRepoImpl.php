<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 5:56 PM
 */

require_once __DIR__."/../SportRepo.php";
require_once __DIR__."/../../core/Sport.php";
require_once __DIR__."/../../db/DBConnection.php";

class SportRepoImpl implements SportRepo{

    private $connection;

    /**
     * SportRepoImpl constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getDBConnection();
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addSport(Sport $sport): bool
    {
        $result = $this->connection->query("INSERT INTO sport VALUES('{$sport->getSportID()}','{$sport->getSportName()}','{$sport->getFee()}')");

        if ($result > 0){
            return true;
        }else{
            return false;
        }

    }

    public function deleteSport(string $sportID): bool
    {
        // TODO: Implement deleteSport() method.
    }

    public function updateSport(Sport $sport): bool
    {
        // TODO: Implement updateSport() method.
    }

    public function searchSport(string $sportID): array
    {
        // TODO: Implement searchSport() method.
    }

    public function getAllSports(): array
    {
        // TODO: Implement getAllSports() method.
    }
}