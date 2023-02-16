<?php
//Time zone of Bangladesh
date_default_timezone_set("Asia/Dacca");

//Checks cookie settings
if (!isset($_COOKIE['lastVisited'])) {
    $lastVisited = "Your're Visiting this site for the first time";
    echo $lastVisited;
    setcookie('lastVisited', date('d-m-Y', time()));
} else if (isset($_COOKIE['lastVisited'])) {
    $lastVisited = $_COOKIE['lastVisited'];
    setcookie('lastVisited', date('d-m-Y', time()));
    echo "You've last visited this site on: " . $lastVisited;
    echo "<br> And the time was : " . date('H:i:s') . " (UTC+6)";
} else
    echo "Something went wrong!";
?>



<!-- 
    //old code

date_default_timezone_set("Asia/Dacca");
if (isset($_COOKIE['lastVisited'])) {
    $lastVisited = $_COOKIE['lastVisited'];
} else {
    $lastVisited = "Your're Visiting this site for the first time";
}

setcookie('lastVisited', date('d-m-Y', time()));
echo "Visit: " . $lastVisited;
echo "<br> Current Time: " . date('H:i:s'); -->