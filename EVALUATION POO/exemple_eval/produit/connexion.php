<?php
$bdd = new PDO('mysql:host=localhost;dbname=site_commerce', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));