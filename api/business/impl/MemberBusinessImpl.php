<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:46 PM
 */

require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Member.php";
require_once __DIR__."/../MemberBusiness.php";
require_once __DIR__ . "/../../repo/impl/MemberRepoImpl.php";

class MemberBusinessImpl implements MemberBusiness {

    public function addMember(Member $member): bool{

        $connection = (new DBConnection())->getDBConnection();
        $memberRepo = new MemberRepoImpl();
        $memberRepo->setConnection($connection);

        return $memberRepo->addMember($member);

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
        $connection = (new DBConnection())->getDBConnection();
        $memberRepo = new MemberRepoImpl();
        $memberRepo->setConnection($connection);

        return $memberRepo->getAllMembers();
    }
}