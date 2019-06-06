<?php
function getItemHtml($id, $item) {
    $output = "<li><a href='#'><img src='"
        . $item["img"] . "' alt='"
        . "<p>View Description</p>"
        . "</a></li>";

        return $output;

}