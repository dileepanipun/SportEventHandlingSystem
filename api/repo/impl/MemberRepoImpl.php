<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:32 PM
 */

require_once __DIR__."/../MemberRepo.php";
require_once __DIR__."/../../core/Member.php";
require_once __DIR__."/../../db/DBConnection.php";

class MemberRepoImpl implements MemberRepo{

    private $connection;

    /**
     * MemberRepoImpl constructor.
     */
    public function __construct(){

        $this->connection = (new DBConnection())->getDBConnection();

    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addMember(Member $member): bool{

        $result = $this->connection->query("INSERT INTO member VALUES('{$member->getMemberID()}','{$member->getMName()}','{$member->getMAddress()}','{$member->getDob()}','{$member->getGender()}','{$member->getTelephone()}','{$member->getWeight()}','{$member->getHeight()}')");

        if ($result > 0){
            return true;
        }else{
            return false;
        }

    }

    public function deleteMember(string $memberID): bool
    {
        // TODO: Implement deleteMember() method.
    }

    public function updateMemeber(Member $member): bool
    {
        // TODO: Implement updateMemeber() method.
    }

    public function searchMember(string $memberID): array
    {
        // TODO: Implement searchMember() method.
    }

    public function getAllMembers(): array{

        $resultset = $this->connection->query("SELECT * FROM member");
        return $resultset->fetch_all();

    }
}