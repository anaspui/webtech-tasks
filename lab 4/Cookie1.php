<?php
date_default_timezone_set("Asia/Dacca");
if (isset($_COOKIE['lastVisited'])) {
    $lastVisited = $_COOKIE['lastVisited'];
} else {
    $lastVisited = "Your're Visiting this site for the first time";
}

setcookie('lastVisited', date('d-m-Y', time()));
echo "Visit: " . $lastVisited;
echo "<br> Current Time: " . date('H:i:s');

?>