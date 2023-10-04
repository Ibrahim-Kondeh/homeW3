<?php
require_once("util-db.php");
require_once("model-member.php");

$pageTitle = "Member";
include "view-header.php";
$member = selectLibrarymember();
include "view-member.php";
include "view-footer.php";
?>
