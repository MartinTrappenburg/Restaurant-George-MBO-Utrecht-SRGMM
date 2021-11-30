<?php
include("./connect_db.php");
include("./functions.php");
$comment = sanitize($_POST["review"]);

$sql = "INSERT INTO `review`(`TIME`, `comment`, `username`) VALUE (CURRENT_TIMESTAMP, `$comment`, `$username`)";