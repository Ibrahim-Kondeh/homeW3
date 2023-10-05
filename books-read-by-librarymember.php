<?php
require_once("util-db.php");
require_once("model-books-read-by-librarymember.php");

$pageTitle = "Books Read by Memebrs";
include "view-header.php";
$books = selectBooksReadbyMembers($_GET['id']);
include "view-books-read-by-librarymember.php";
include "view-footer.php";
?>
