<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:44 PM
 */

require_once __DIR__."/../core/Member.php";

interface MemberBusiness{

    public function addMember(Member $member):bool ;

    public function deleteMember(string $memberID):bool ;

    public function updateMemeber(Member $member):bool ;

    public function searchMember(string $memberID):array ;

    public function getAllMembers():array ;

}