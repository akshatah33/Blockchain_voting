<?php	include "connection.php";//    session_start();    //    TODO: refactoring    //    TODO: Security: mysqli_real_escape_string    //	       TODO: hashing and salting using crypt() and hasformat blowfish    //Fetch full database    //$conn->query($query);    //$sql = "SELECT email, password FROM users";    //$result1 = $conn->query($sql);    // if ($result1->num_rows > 0)    // {    //     while($row = $result1->fetch_assoc())    //     {    //         echo "User: " . $row["email"]. " - Password: " . $row["password"]. " " . "<br>";    //     }    // }//$hash = "$2y$10$";//$salt = "thisisjustatwentytwo22";//$hash = $hash . $salt;//$enc_pass = crypt($password,$hash);    //LOGIN function login(){    global $conn;    if (isset($_POST['user']) and isset($_POST['password'])) {        $user = $_POST['user'];        $password = $_POST['password'];        $query = "SELECT * FROM users WHERE email='$user' and password='$password'";        $result = $conn->query($query) or die($conn->connect_error);        echo "This is ".$result->fetch_assoc()["username"]."<br>";        $count = $result->num_rows;        if ($count == 1) {//            $_SESSION['user'] = $result->fetch_assoc()["username"];            echo "Hey " . $_SESSION['user'] . " ,you have successfully logged in.";//            header('location: ../login_success.php');        } else {//            $_SESSION['$fmsg'] =              echo  "Invalid Login Credentials.";//            session_destroy();        }    }//    if (isset($_SESSION['user'])) {//        echo "Invalid Login";//    } else {////        echo "Invalid Login";//    }//    $conn->close();    }?>