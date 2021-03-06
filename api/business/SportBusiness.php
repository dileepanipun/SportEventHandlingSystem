<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 4:57 PM
 */


require_once __DIR__."/../core/Sport.php";

interface SportBusiness
{
    public function addSport(Sport $sport):bool ;

    public function deleteSport(string $sportID):bool ;

    public function updateSport(Sport $sport):bool ;

    public function searchSport(string $sportID):array ;

    public function getAllSports():array ;



}