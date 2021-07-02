<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cont{
            border: 2px solid skyblue;
            background-color: lightcyan;
            color: black;
        }
        
    </style>
</head>
<body>
    <div id="cont">
        <h1 style="text-align: center;">
            Welcome Login successfull!!
        </h1>
        <div>
        <a href="logout.php">LOGOUT</a>
    </div>
    </div>
    
</body>
</html>
