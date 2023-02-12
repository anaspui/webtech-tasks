<?php
function sanitize($data){
 $data = htmlspecialchars($data);
 return $data;
}
//var_dump($_REQUEST);
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_REQUEST["fname"];
        $lname = $_REQUEST["lname"];
        $faname = $_REQUEST["faname"];
        $moname = $_REQUEST["moname"];
        $bgrp = $_REQUEST["bgrp"];
        $email = $_REQUEST["email"];
        $phn = $_REQUEST["phn"];
        $web = $_REQUEST["web"];
        $pad = $_REQUEST["pad"];
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if (empty($fname)) {
                echo "Please fillup First Name.<br>";
        }
        if (empty($lname)) {
                echo "Please fillup Last Name.<br>";
        }
        if (empty($faname)) {
                echo "Please fillup Fathers Name.<br>";
        }
        if (empty($moname)) {
                echo "Please fillup Mothers Name.<br>";
        }
        if (empty($bgrp)) {
                echo "Please fillup Blood Group.<br>";
        }
        if (empty($email)) {
                echo "Please fillup Email.<br>";
        }
        if (empty($phn)) {
                echo "Please fillup Phone/Mobile.<br>";
        }
        if (empty($web)) {
                echo "Please fillup website.<br>";
        }
        if (empty($pad)) {
                echo "Please fillup present address.<br>";
        }
        if (empty($username)) {
                echo "Please fillup Username.<br>";
        }
        if (empty($password)) {
                echo "Please fillup Password.<br>";
        }
        else{
                echo "  ";
                
        }

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Page
        </title>
<style>
    .center {
  margin-left: auto;
  margin-right: auto;

}
h1{
    text-align: center;
}
button{
    text-align: center;
}
</style>
    </head>
    <body>
            <table class="center">
                <h1>Registration</h1>
                <tr>
                    <td>
                        <fieldset>
                            <Legend><b>General Information: </b></Legend>
                                <table>
                                    <tr>
                                        <th><label for="fname">First Name:</label></th>
                                        <td><label for=""><?php echo $fname ?> </label></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="lname">Last Name:</label></th>
                                        <td><label for=""><?php echo $lname ?> </label></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="faname">Father's Name:</label></th>
                                        <td><label for=""><?php echo $faname ?> </label></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="moname">Mother's Name:</label></th>
                                        <td><label for=""><?php echo $moname ?> </label></Input></td>
                                       
                                    </tr>
                                    <tr>
                                        <th><label for="male">Gender: </label> </th>
                                        
                                        <td><label for=""><?php echo "Male" ?> </label></Input></td>
                                            
                                        
                                    </tr>
                                    <tr>
                                        <th><label for="date">Date of Birth</label></th>
                                        <td><input type="date" name="date" id="date"></td>
                                    </tr>
                                    <tr>
                                        <th><label for="bgrp">Blood Group:</label> </th>
                                        <td><label for=""><?php echo $bgrp ?> </label></td>
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
                                        <td><td><label for=""><?php echo $email ?> </label></Input></td></td>
                                    </tr>
                                    <tr>
                                        <th><label for="phn">Phone/Mobile: </label></th>
                                        <td><td><label for=""><?php echo $phn ?> </label></Input></td></td>
                                    </tr>
                                    <tr>
                                        <th><label for="web">Website: </label></th>
                                        <td><td><label for=""><?php echo $web ?> </label></Input></td></td>
                                    </tr>
                                    <tr>
                                        <th><label for="pad">Present Address: </label></th>
                                        <td><td><label for=""><?php echo $pad ?> </label></Input></td></td>
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
                                        <td><td><label for=""><?php echo $username ?> </label></Input></td></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="password">Password: </label></th>
                                        <td><td><label for=""><?php echo "********" ?> </label></Input></td></td>
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
    </body>
</html>
