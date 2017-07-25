<?php
error_reporting(E_ALL);
include_once "bootstraps.php";
session_start();
$api = new BadgeAPI();
$api->run();
?>