<?php

include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Full Catalog";



if (isset($_GET["id"])){
 $id = $_GET["id"]  ;
 if(isset($catalog[$id])) {
     $item = $catalog[$id];
 }
}

if (!isset($item)) {
    header("location:catalog.php");
    exit;
}

$pageTitle = $item["title"];
$section = null;

include("includes/header.php");?>

<div class="section page">
    <div class="wrapper">
        <div class="media-picture">
            <span><img src="<?php echo $item["img"];?>" alt="<?php echo $item["title"];?>"/></span>
        </div>
        <div class="media-details">
        <h1><?php echo $item["title"]; ?></h1>
        <table>
            <tr>
                <th>Category</th>
                <td><?php echo $item["category"];?></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td><?php echo $item["genre"];?></td>
            </tr>
            <tr>
                <th>Format</th>
                <td><?php echo $item["format"];?></td>
            </tr>
            <tr>
                <th>Year</th>
                <td><?php echo $item["year"];?></td>
            </tr>

        </table>


        </div>
    </div>
</div>

include("includes/header.php"); ?>