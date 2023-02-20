<?php
session_start();
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// var_dump($_REQUEST);
// echo "<hr>";
// print_r(isset($_POST['gender']));
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['fname'] = isset($_POST["fname"]) ? sanitize($_POST["fname"]) : "";
    $_SESSION['lname'] = isset($_POST["lname"]) ? sanitize($_POST["lname"]) : "";
    $_SESSION['faname'] = isset($_POST["faname"]) ? sanitize($_POST["faname"]) : "";
    $_SESSION['moname'] = isset($_POST["moname"]) ? sanitize($_POST["moname"]) : "";
    $_SESSION['bgrp'] = isset($_POST["bgrp"]) ? sanitize($_POST["bgrp"]) : "";
    $_SESSION['gender'] = isset($_POST["gender"]) ? sanitize($_POST["gender"]) : "";
    $_SESSION['date'] = isset($_POST["date"]) ? sanitize($_POST["date"]) : "";
    $_SESSION['email'] = isset($_POST["email"]) ? sanitize($_POST["email"]) : "";
    $_SESSION['phn'] = isset($_POST["phn"]) ? sanitize($_POST["phn"]) : "";
    $_SESSION['web'] = isset($_POST["web"]) ? sanitize($_POST["web"]) : "";
    $_SESSION['pad'] = isset($_POST["pad"]) ? sanitize($_POST["pad"]) : "";
    $_SESSION['username'] = isset($_POST["username"]) ? sanitize($_POST["username"]) : "";
    $_SESSION['password'] = isset($_POST["password"]) ? sanitize($_POST["password"]) : "";







    if (!empty($_SESSION['fname'] && $_SESSION['lname'] && $_SESSION['faname'] && $_SESSION['moname'] && $_SESSION['bgrp'] && $_SESSION['gender'] && $_SESSION['date'] && $_SESSION['email'] && $_SESSION['phn'] && $_SESSION['web'] && $_SESSION['pad'] && $_SESSION['username'] && $_SESSION['password'])) {
        header('Location: Index.php');
    } else {
        session_unset();
        header('Location: Index.php');
    }

}