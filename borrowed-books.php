<?php
require_once("util-db.php");
require_once("model-borrowed-books.php");

$pageTitle = "Borrowed Books BY Member";
include "view-header.php";
$books = selectborrowedbook($_GET['id']);
include "view-borrowed-books.php";
include "view-footer.php";
?>
