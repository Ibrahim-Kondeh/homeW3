<?php
require_once("util-db.php");
require_once("model-books-borrowed-by-member.php");

$pageTitle = "Books Borrowed by Members";
include "view-header.php";
$borrowedbooks = selectBooksBorrowedbyMembers($_GET['id']);
include "view-books-borrowed-by-member.php";
include "view-footer.php";
?>
