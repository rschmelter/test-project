<?php
function getItemHtml($id, $item) {
    $output = "<li><a href='#'><img src='"
        . $item["img"] . "' alt='"
        . "<p>View Description</p>"
        . "</a></li>";

        return $output;
}

function array_category($catalog, $category) {
    $output = array();
    foreach ($catalog as $id => $item) {
        if (strtolower($category) == strtolower($item["category"])) {
           $output[] = $id; 
        }
    }
    return $output;
}