<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/4/18
 * Time: 1:23 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <style>
        html, body {
            height: 100%;
        }
        html {
            background-image: url('../img/sample.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        body {
            background-color: rgba(44,62,80 , 0.6 );
            background-image: url('../img/pattern.png');
            background-position: center;
            background-repeat: repeat;
            font-family: 'Raleway', 'Arial', sans-serif;
        }
        .countdown-container {
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .clock-item .inner {
            height: 0px;
            padding-bottom: 100%;
            position: relative;
            width: 100%;
        }
        .clock-canvas {
            background-color: rgba(255, 255, 255, .1);
            border-radius: 50%;
            height: 0px;
            padding-bottom: 100%;
        }
        .text {
            color: #fff;
            font-size: 30px;
            font-weight: bold;
            margin-top: -50px;
            position: absolute;
            top: 50%;
            text-align: center;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
            width: 100%;
        }
        .text .val {
            font-size: 50px;
        }
        .text .type-time {
            font-size: 20px;
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .clock-item {
                margin-bottom: 30px;
            }
        }
        @media (max-width: 767px) {
            .clock-item {
                margin: 0px 30px 30px 30px;
            }
        }
    </style>

</head>
<body>

<div class="countdown-container container">
    <div class="clock row">

        <!-- days -->
        <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas_days" class="clock-canvas"></div>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-days type-time">DAYS</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- hours -->
        <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas_hours" class="clock-canvas"></div>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-hours type-time">HOURS</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- minutes -->
        <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas_minutes" class="clock-canvas"></div>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-minutes type-time">MINUTES</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- seconds -->
        <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
            <div class="wrap">
                <div class="inner">
                    <div id="canvas_seconds" class="clock-canvas"></div>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type-seconds type-time">SECONDS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('.countdown').final_countdown({
            start: '1541368716',
            end: '1542404051',
            now: DateTime.now().toString(),
            selectors: {
                value_seconds: '.clock-seconds .val',
                canvas_seconds: 'canvas_seconds',
                value_minutes: '.clock-minutes .val',
                canvas_minutes: 'canvas_minutes',
                value_hours: '.clock-hours .val',
                canvas_hours: 'canvas_hours',
                value_days: '.clock-days .val',
                canvas_days: 'canvas_days'
            },
            seconds: {
                borderColor: '#7995D5',
                borderWidth: '6'
            },
            minutes: {
                borderColor: '#ACC742',
                borderWidth: '6'
            },
            hours: {
                borderColor: '#ECEFCB',
                borderWidth: '6'
            },
            days: {
                borderColor: '#FF9900',
                borderWidth: '6'
            }}, function() {
// Finish callback
        });


</script>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/kinetic.js"></script>
<script type="text/javascript" src="../jquery.final-countdown.js"></script>

</body>
</html>
