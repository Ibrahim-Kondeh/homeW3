<?php
require_once("util-db.php");
require_once("model-member.php");

$pageTitle = "Member";
include "view-header.php";
$member = selectlibrarymember();
include "view-librarymember.php";
include "view-footer.php";
?>
