<!-- Start Session -->
<?php
session_start();
include 'functions.php';
?>

<html>
<head>
<title>JS Limited LLC</title>

<!-- Imports -->
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src='js/triggers.js'></script>
</head>

<body>

<!-- Header Div -->
<div id='header'>
<?php createLogo(); ?>
</div>
<!-- End Header Div -->

<!-- Body Div -->
<div id='body'>

    <div id='leftWidget'>
    <!--
    <a href='https://www.amazon.com/dp/B07MZRBMV6'>Archer Baby</a> | <a href='https://www.amazon.com/dp/B07ZXMX86J'>JS Puzzle Co.</a> </br>
    <a href='https://www.amazon.com/dp/B07Y3Z7LXY'>JS Interior</a> -->
    <div id='leftWidgetContent'><h1>Businesses</h1></div>
    </div>

    <div id='rightWidget'>
    <div id='rightWidgetContent'><h1>About Us</h1></div>
    </div>

</div>
<!-- End Body Div -->

<!-- Footer Div -->
<div id='footer'>
Copyright JS Ltd.
</div>
<!-- End Footer Div -->

</body>

</html>


