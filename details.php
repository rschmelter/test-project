<?php

include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Full Catalog";

$section = null;


if (isset($_GET["cat"])){
    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    } else if ($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }
};

include("includes/header.php"); ?>