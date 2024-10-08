<?php

$launchDate = date("Y-m-d H:i:s", strtotime("+1 week"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .bgimg {
            background-image: url('https://img.freepik.com/premium-vector/modern-simple-background-with-blue-color-scheme_75555-65.jpg'); 
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 25px;
        }
        .topleft {
            position: absolute;
            top: 0;
            left: 16px;
        }
        .bottomleft {
            position: absolute;
            bottom: 0;
            left: 16px;
        }
        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        hr {
            margin: auto;
            width: 40%;
        }
    </style>
</head>
<body>

<div class="bgimg">
    <div class="topleft">
        
    </div>
    <div class="middle">
        <h1>COMING SOON</h1>
        <hr>
        <p id="demo" style="font-size:30px;"></p>
    </div>
    <div class="bottomleft">
        
    </div>
</div>

<script>

var countDownDate = new Date("<?php echo $launchDate; ?>").getTime();

var countdownfunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>
</html>
