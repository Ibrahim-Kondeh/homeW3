<?php
require_once("util-db.php");
require_once("model-books-borrowed-by-member.php");

$pageTitle = "Books Borrowed by Members";
include "view-header.php";
$books = selectBooksBorrowedbyMember($_GET['id']);
include "view-books-borrowed-by-member.php";
include "view-footer.php";
?>
