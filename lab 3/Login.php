<?php
// var_dump($_REQUEST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if (empty($username)) {
                echo "Please fillup Username.<br>";
        }
        if (empty($password)) {
                echo "Please fillup Password.<br>";
        } else {
                echo "<h1>Login successful</h1>";

        }

}
?>