<?php
/**
 * Created by PhpStorm.
 * User: D max
 * Date: 12/8/2018
 * Time: 6:03 PM
 */

require_once __DIR__."/../business/impl/SportBusinessImpl.php";
require_once __DIR__."/../core/Sport.php";

$sportBO = new SportRepoImpl();
//$operation = $_GET['operation'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($method){

    case "GET":
        echo json_encode($sportBO->getAllSports());
        break;

    case "POST" :

        $sportID = $_POST['sportID'];
        $sportName = $_POST['sportName'];
        $sportFee = $_POST['fee'];


        $temp = new Sport($sportID,$sportName,$sportFee);
        $resp = $sportBO->addSport($temp);
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
