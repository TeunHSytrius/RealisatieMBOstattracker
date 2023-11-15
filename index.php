<?php
session_start();
require "./config/dbconn.php";
include "header.php";

if(isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "login";
}
if ($page) {
    include "pages/" . $page . ".php";
}