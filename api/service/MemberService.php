<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/3/2018
 * Time: 11:50 PM
 */

require_once __DIR__."/../business/impl/MemberBusinessImpl.php";
require_once __DIR__."/../core/Member.php";

$memberBO = new MemberRepoImpl();
//$operation = $_GET['operation'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($method){

    case "GET":
        echo json_encode($memberBO->getAllMembers());
        break;

    case "POST" :

        $memberID = $_POST['memberID'];
        $mName = $_POST['memberName'];
        $mAddress = $_POST['memberAddress'];
        $mDob = $_POST['memberDob'];
        $mGender = $_POST['memberGender'];
        $mTel = $_POST['memberTelephone'];
        $mWeight = $_POST['memberWeight'];
        $mHeight = $_POST['memberHeight'];

        $temp = new Member($memberID,$mName,$mAddress,$mDob,$mGender,$mTel,$mWeight,$mHeight);
        $resp = $memberBO->addMember($temp);
        echo $resp;

//        switch ($operation){
//
//            case "add" :
//
//                $temp = new Member($memberID,$mName,$mAddress,$mNic);
//                $resp = $memberBO->addMember($temp);
//                echo $resp;
//                break;
//
//            case "update" : break;
//
//            case "delete" : break;
//
//        }

        break;

}


