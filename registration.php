<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DashBoard</title>
    <link rel="icon" type="image/icon" href="dist/assest/logo.png">
    <meta name="viewport" content="width=device-with initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dist/css/Registration.css">
    <link rel="stylesheet" type="text/css" href="dist/css/Normlize.css">
    <link rel="stylesheet" type="text/css" href="dist/css/Common.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Quicksand" rel="stylesheet">
</head>
<body>

<?php require_once "header.php"?>

<div id="notification-pane" class="position-fixed m-auto" style="right: 10px;bottom: 10px;width: fit-content;height: fit-content;z-index: 2000">
    <div class="card" style="width: 400px">
        <div class="card-body">
            <img class="d-inline" src="dist/assest/checked.png" style="width: 40px;">&nbsp;&nbsp;&nbsp;&nbsp;
            <p class="card-text d-inline">You Registered Succesfuly.</p>
            <button id="close-notification" type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<main>

    <div class="row justify-content-center mb-3" style="margin-top: 90px">
        <div class="card" style="background-color: rgba(255,255,255,0.73);!important;">
            <div class="card-body">
                <form id="memberForm">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Member Register Form</legend>

                        <div class="form-row">
                            <div class="col-4 mb-3">
                                <label for="memberID">Member ID</label>
                                <input name="memberID" type="text" class="form-control" id="memberID" placeholder="First name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="memberName">Your Name</label>
                                <input name="memberName" type="text" class="form-control" id="memberName" placeholder="Your Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col mb-3">
                                <label for="memberAddress">Your Address</label>
                                <input name="memberAddress" type="text" class="form-control" id="memberAddress" placeholder="City / Town" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-5 mb-3">
                                <label for="memberDob">Date of Birth</label>
                                <input name="memberDob" type="date" class="form-control" id="memberDob" placeholder="Date Of birth" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col mb-3">
                                <div class="form-group">
                                    <label for="memberGender">Gender : </label>
                                    <select name="memberGender" class="custom-select" required>
                                        <option value="">Select Your Geder</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                    <div class="invalid-feedback">Please select one</div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="memberTelephone">Mobile Number</label>
                                <input name="memberTelephone" type="text" class="form-control" id="memberTelephone" placeholder="Telephone Number here" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col mb-3">
                                <label for="memberWeight">Weight</label>
                                <input name="memberWeight" type="number" class="form-control" id="memberWeight" placeholder="weight in kg" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="memberHeight">Height</label>
                                <input name="memberHeight" type="number" class="form-control" id="memberHeight" placeholder="height in m" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <button type="button" id="cancelBtn" class="btn col btn-primary m-2">Cancel</button>
                                <button type="button" id="saveMemberBTN" class="btn col btn-primary m-2">Register</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require_once "footer.php"?>

<script rel="script" type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script rel="script" type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>
<script rel="script" type="application/javascript" src="dist/controller/RegistrationController.js"></script>
<script rel="script" type="application/javascript" src="dist/controller/CommonController.js"></script>
</body>
</html>