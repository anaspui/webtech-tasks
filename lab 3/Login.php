<html>

<head>
    <title>Login</title>
</head>

<body>
    <div align="center">
        <?php
                function sanitize($data)
                {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                }
                // var_dump($_REQUEST);
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $flag = true;
                        $username = sanitize($_POST["username"]);
                        $password = sanitize($_POST["password"]);

                        if (empty($username)) {
                                $flag = false;
                                echo "Please fillup Username.<br>";
                        }
                        if (empty($password)) {
                                $flag = false;
                                echo "Please fillup Password.<br>";
                        }
                        if ($flag === true) {
                                echo "<h1>Login successful</h1>";

                        }

                }
                ?>
    </div>
</body>

</html>