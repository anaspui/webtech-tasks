<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div align="center">
        <h1>Registration</h1><br>
        <?php
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
            $fname = sanitize($_POST["fname"]);
            $lname = sanitize($_POST["lname"]);
            $faname = sanitize($_POST["faname"]);
            $moname = sanitize($_POST["moname"]);
            $bgrp = sanitize($_POST["bgrp"]);
            $gender = isset($_POST["gender"]) ? sanitize($_POST["gender"]) : "";
            $dob = sanitize($_POST["date"]);
            $email = sanitize($_POST["email"]);
            $phn = sanitize($_POST["phn"]);
            $web = sanitize($_POST["web"]);
            $pad = sanitize($_POST["pad"]);
            $username = sanitize($_POST["username"]);
            $password = sanitize($_POST["password"]);
            $flag = true;
            if (empty($fname)) {
                $flag = false;
                echo "Please fillup First Name.<br>";
            }
            if (empty($lname)) {
                $flag = false;
                echo "Please fillup Last Name.<br>";
            }
            if (empty($faname)) {
                $flag = false;
                echo "Please fillup Fathers Name.<br>";
            }
            if (empty($moname)) {
                $flag = false;
                echo "Please fillup Mothers Name.<br>";
            }
            if (empty($gender)) {
                $flag = false;
                echo "Please fillup Genders.<br>";
            }
            if (empty($bgrp)) {
                $flag = false;
                echo "Please fillup Blood Group.<br>";
            }
            if (empty($dob)) {
                $flag = false;
                echo "Please fillup DOB.<br>";
            }
            if (empty($email)) {
                $flag = false;
                echo "Please fillup Email.<br>";
            }
            if (empty($phn)) {
                $flag = false;
                echo "Please fillup Phone/Mobile.<br>";
            }
            if (empty($web)) {
                $flag = false;
                echo "Please fillup website.<br>";
            }
            if (empty($pad)) {
                $flag = false;
                echo "Please fillup present address.<br>";
            }
            if (empty($username)) {
                $flag = false;
                echo "Please fillup Username.<br>";
            }
            if (empty($password)) {
                $flag = false;
                echo "Please fillup Password.<br>";
            }
            if ($flag === true) {
                echo "<p><u>Registration Successful.</u></p><br>";

                ?>
        <table>
            <tr>
                <td>
                    <fieldset>
                        <Legend><b>General Information: </b></Legend>
                        <table>
                            <tr>
                                <th><label for="fname">First Name:</label></th>
                                <td><label for="">
                                        <?php echo $fname ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                                <th><label for="lname">Last Name:</label></th>
                                <td><label for="">
                                        <?php echo $lname ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                                <th><label for="faname">Father's Name:</label></th>
                                <td><label for="">
                                        <?php echo $faname ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                                <th><label for="moname">Mother's Name:</label></th>
                                <td><label for="">
                                        <?php echo $moname ?>
                                    </label></Input></td>

                            </tr>
                            <tr>
                                <th><label for="male">Gender: </label> </th>

                                <td><label for="">
                                        <?php echo $gender ?>
                                    </label></Input></td>


                            </tr>
                            <tr>
                                <th><label for="date">Date of Birth</label></th>
                                <td><label for="">
                                        <?php echo $dob ?>
                                    </label></Input></td>
                            </tr>
                            <tr>
                                <th><label for="bgrp">Blood Group:</label> </th>
                                <td><label for="">
                                        <?php echo $bgrp ?>
                                    </label></td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend><b>Contact Information: </b></legend>
                        <table>
                            <tr>
                                <th><label for="email">Email: </label></th>
                                <td>
                                <td><label for="">
                                        <?php echo $email ?>
                                    </label></Input></td>
                </td>
            </tr>
            <tr>
                <th><label for="phn">Phone/Mobile: </label></th>
                <td>
                <td><label for="">
                        <?php echo $phn ?>
                    </label></Input></td>
                </td>
            </tr>
            <tr>
                <th><label for="web">Website: </label></th>
                <td>
                <td><label for="">
                        <?php echo $web ?>
                    </label></Input></td>
                </td>
            </tr>
            <tr>
                <th><label for="pad">Present Address: </label></th>
                <td>
                <td><label for="">
                        <?php echo $pad ?>
                    </label></Input></td>
                </td>
            </tr>

        </table>
        </fieldset>
        </td>
        </tr>
        <tr>
        <tr>
            <td>
                <fieldset>
                    <legend><b>Account Information: </b></legend>
                    <table>
                        <tr>
                            <th><label for="Username">Username: </label></th>
                            <td>
                            <td><label for="">
                                    <?php echo $username ?>
                                </label></Input></td></Input>
            </td>
        </tr>
        <tr>
            <th><label for="password">Password: </label></th>
            <td>
            <td><label for="">
                    <?php echo "********" ?>
                </label></Input></td>
            </td>
        </tr>

        </table>
        </fieldset>
        </td>
        </tr>
        </tr>
        <tr>
            <td>
                <a href="Login.html">Login</a>
            </td>
        </tr>
        </table>
    </div>


    <?php
            }
        }
        ?>
</body>

</html>