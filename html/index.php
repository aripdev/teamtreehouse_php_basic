<?php

date_default_timezone_set("Asia/Jakarta");

$name = "Arif Iskandar";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <style>


    </style>
    <title>Team Treehouse <?php echo $name; ?></title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-3 bg-dark ">
                <div class="d-flex flex-column m-5">
                    <img class="d-flex align-self-center" src="images/gs-blue.png" alt="Logo" width="90px">
                </div>

                <div class="d-flex flex-column m-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>

            <div class="content col-lg-9 p-0 vh-100">

                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">My first page PHP</p>

                    <section class="pl-5">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                    </section>

                    <section class="pl-5">
                        <p class="h2">String</p>
                        <?php include "inc/string.php"; ?>
                        <p class="lead"><?php echo askName("AhMad DhAni"); ?></p>
                    </section>
                </div>

                <div class="d-flex flex-column">

                </div>

                <div class="d-flex position-absolute fixed-bottom bg-light ">
                    <p class="font-weight-normal mx-auto p-3">&copy; <?php echo $name;
                                                                        echo " Last modified: "
                                                                            . date("F d Y H:i:s.", getlastmod()); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>