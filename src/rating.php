<?php
session_start();
if(!isset($_SESSION['t1'])){
header("Location:http://localhost:63342/MARVEL/src/login.html");
}
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ratings</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="js/jquery-1.12.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendor/star-rating.js"></script>

    <link rel="stylesheet" href="css/star-rating.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body class="Ratings">

<ul>
    <li style="color: transparent">ABCDEFGHIJKL</li>
    <li><img src="img/Marvel-logo-880x660.png"></li>
    <li><a href="index.html">Home</a></li>
    <li><a href="videos.html">Videos</a></li>
    <li><a href="comics.html">Comics</a></li>
    <li><a href="download.html">Downloads</a></li>
    <li><a href="tb.html">Ticket Booking</a></li>
    <li><a href="rating.html" class="active">Rating</a></li>
    <li></li>
</ul>
<div id="r">
<form id="rate" action="http://localhost:9090/b.php" method="post" >
    <table id="rat">
        <tr>
            <td id="r1"><img src="img/cap.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r1" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/iron.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r2" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/thor.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r3" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/pool.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r4" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/hulk.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r5" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/wol1.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r6" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
        <tr>
            <td id="r1"><img src="img/avg.jpg" width="95" height="131"></td>
            <td id="r1"><input id="in" value="4" name="r7" type="number" class="rating" min=0 max=5 step=0.2 data-size="lg"></td>
        </tr>
</table>
    <br>
    <br>
    <center>
<input style="width:300px" type="submit" class="btn btn-danger" name="sub1">
</center>
</form>
</div>
</body>
</html>
