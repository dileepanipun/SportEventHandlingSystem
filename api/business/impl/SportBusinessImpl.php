<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 4:58 PM
 */


require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Sport.php";
require_once __DIR__."/../SportBusiness.php";
require_once __DIR__ . "/../../repo/impl/SportRepoImpl.php";

class SportBusinessImpl implements SportBusiness
{

    public function addSport(Sport $sport): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $sportRepo = new SportRepoImpl();
        $sportRepo->setConnection($connection);

        return $sportRepo->addSport($sport);
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

    }
}