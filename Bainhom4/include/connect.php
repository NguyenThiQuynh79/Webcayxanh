<?php
    $link=mysqli_connect("localhost","root","")
    or die("Cannot connect to the database");
    mysqli_select_db($link,"cayxanh24h")
    or die("Cannot connect to the database");
    mysqli_query($link,"SET NAMES 'UTF8'");
?>