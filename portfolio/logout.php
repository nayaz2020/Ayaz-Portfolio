<?php
/**
 * Logout.php
 * Nematullah Ayaz
 * 11/28/2020
 */
session_start();
session_destroy();
$_SESSION = array();
header("location: login.php");
