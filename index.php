<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>TCC Igor</title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="libs/js/bootstrap.js"></script>
    <script type="text/javascript" src="libs/js/jquery.js"></script>
</head>

<body>

    <?php
    include_once './pages/navbar.php';
    $host = $_SERVER['HTTP_HOST'];
    $host_upper = strtoupper($host);
    $path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $baseurl = "http://" . $host . $path . "/";


   

    ?>

    <img src="img/banner1.jpg" width="100%" style="">
    <img src="img/banner2.jpg" width="100%">
</body>

</html>