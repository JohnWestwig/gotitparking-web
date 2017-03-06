<?php
    require_once "_session.php";
    require_once "_db.php";

    $header_info = array(
        "title" => "Sell",
        "css" => array("_stylesheets/sell_splash.css"),
        "social" => true
    );
    require_once "_header.php";
    require_once "navbar.php";
?>

    <body>
        <div class="container">
            <div class="flex-row">
                <div class="col-md-8">
                    <h2>Why GotIt! Parking?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget rutrum tortor. Nam at facilisis metus. Cras sollicitudin, nisi eget auctor tincidunt, turpis mi aliquet quam, quis laoreet nunc purus at ante. Sed enim nunc, varius quis ultricies nec, auctor in quam. Duis nec sem quis odio venenatis egestas a a est. Aliquam pulvinar arcu non magna tristique dapibus. Suspendisse tincidunt placerat dapibus. </p>
                </div>
                <div class="col-md-4 text-center">
                    <a class="btn btn-primary btn-lg " href="sell.php">Start Selling&nbsp;<i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3 text-center">
                    <h1 class="step-number">1</h1>
                    <p class="step-text">Enter your Address</p>
                </div>
                <div class="col-md-3 text-center">
                    <h1 class="step-number">2</h1>
                    <p class="step-text">Set your Preferences</p>
                </div>
                <div class="col-md-3 text-center">
                    <h1 class="step-number">3</h1>
                    <p class="step-text">Enter the Market</p>
                </div>
                <div class="col-md-3 text-center">
                    <h1 class="step-number">4</h1>
                    <p class="step-text">Start Earning!</p>
                </div>
            </div>
        </div>
    </body>

    <?php
    include "_footer.php";
?>