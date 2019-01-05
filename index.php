<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DashBoard</title>
    <link rel="icon" type="image/icon" href="dist/assest/logo.png">
    <meta name="viewport" content="width=device-with initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dist/css/Index.css">
    <link rel="stylesheet" type="text/css" href="dist/css/Normlize.css">
    <link rel="stylesheet" type="text/css" href="dist/css/Common.css">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Acme" rel="stylesheet">
</head>
<body>

<?php require_once "header.php" ?>

<img class="position-absolute" src="dist/assest/dasdfaf.png" style="top: 70px;width: 100%;z-index: 0">

<div class="position-fixed m-auto" style="top: 90px;right: 8px;z-index: 200;" >
    <a class="nav-link" href="registration.php">
        <button class="btn animated infinite tada Slower delay-2s" style="border-radius: 30px">
            <span>
                <i class="fas fa-chevron-circle-down"></i> Register Now*
            </span>
        </button>
    </a>
</div>

<main style="background-color: #34393e;height: fit-content;">

    <div class="position-relative" style="height: 70px;"></div>

    <div class="position-relative" style="height: 67vh;"></div>

    <div class="row m-3">
        <div class="card justify-content-center" style="background-color: rgba(255,255,255,0.64)">
            <div class="card-body justify-content-center">
                <h2 class="card-title text-center" style="color: #ffffff;font-family: 'Acme', sans-serif;font-size: 50px">
                    Revolutionise is an end-to-end online platform<br> for sports club management.
                </h2>
                <h5 class="card-title" style="font-family: 'Abel', sans-serif;font-size: 30px">
                    Whether you're managing memberships, processing payments, scheduling games
                    or organising club events, we've got you covered.
                </h5>
            </div>
        </div>
    </div>

    <div class="row m-3 justify-content-between">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="dist/assest/catogeries/MemeberShip.png">
            <div class="card-body">
                <h5 class="card-title">Memberships</h5>
                <a href="registration.php" class="btn btn-secondary float-right">Join with us</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="dist/assest/catogeries/communiication.png">
            <div class="card-body">
                <h5 class="card-title">Communication</h5>
                <a href="#" class="btn btn-secondary float-right">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="dist/assest/catogeries/competition.png">
            <div class="card-body">
                <h5 class="card-title">Events</h5>
                <a href="#" class="btn btn-secondary float-right">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="dist/assest/catogeries/paid.png">
            <div class="card-body">
                <h5 class="card-title">Finance</h5>
                <a href="#" class="btn btn-secondary float-right">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row m-3">
        <div class="card justify-content-center" style="background-color: rgba(255,255,255,0.64)">
            <div class="card-body justify-content-center">
                <h2 class="card-title text-center" style="color: #ffffff;font-family: 'Abel', sans-serif;font-size: 30px">
                    Current Tasks We have been coverd.
                </h2>
                <div class="row m-3 justify-content-between">
                    <div class="card col m-2 bg-transparent">
                        <img class="card-img-top" src="dist/assest/sports/socceroos-celebrate-asian-cup-940-x-529-data.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Football Event 2015</h5>
                            <a href="registration.php" class="btn btn-secondary float-right">Join with us</a>
                        </div>
                    </div>

                    <div class="card col m-2 bg-transparent">
                        <img class="card-img-top" src="dist/assest/sports/630601bc-81d3-450a-aabf-c7b68907c1e1.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Motor Cross Event 2016</h5>
                            <a href="#" class="btn btn-secondary float-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card col m-2 bg-transparent">
                        <img class="card-img-top" src="dist/assest/sports/1518512963_pvl.png">
                        <div class="card-body">
                            <h5 class="card-title">VollyBall Event 2017</h5>
                            <a href="#" class="btn btn-secondary float-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card col m-2 bg-transparent">
                        <img class="card-img-top" src="dist/assest/sports/danish_hockey.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Hokey event 2018</h5>
                            <a href="#" class="btn btn-secondary float-right">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row m-3 justify-content-center">
        <div class="card bg-dark justify-content-center text-white">
            <img class="card-img" src="dist/assest/oos-greater-sydney-sport-facility-fund-running-header.png" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    </div>

    <div class="row m-3">
        <div class="card justify-content-center" style="background-color: rgba(255,255,255,0.64)">
            <div class="card-body justify-content-center">
                <h5 class="card-title" style="font-family: 'Abel', sans-serif;font-size: 25px">
                    We believe in working with clubs, to grow and improve along the way.
                    We guarantee that you'll save time, effort and stress by using revolutionise,
                    and we'd love to have you join us in keeping sports management simple.
                </h5>
                <button class="btn btn-secondary float-right">Register Now > </button>
            </div>
        </div>
    </div>

</main>

<?php require_once "footer.php"?>

<script rel="script" type="application/javascript" src="dist/js/bootstrap.min.js"></script>
<script rel="script" type="application/javascript" src="dist/js/jquery-3.3.1.min.js"></script>
<script rel="script" type="application/javascript" src="dist/controller/CommonController.js"></script>
</body>
</html>