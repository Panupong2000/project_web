<?php 

    include("connect.php"); 

    if (isset($_POST['username_check'])) {
        $username = $_POST['username'];
        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            echo 'taken';
        } else {
            echo 'not_taken';
        }
        exit();
    }

    if (isset($_POST['email_check'])) {
        $email = $_POST['email'];
        $sql = "SELECT * FROM user WHERE email = '$email' ";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            echo 'taken';
        } else {
            echo 'not_taken';
        }
        exit();
    }

    // if (isset($_POST['name_check'])) {
    //     $email = $_POST['name'];
    //     $results = mysqli_query($conn, $sql);
    //     if (mysqli_num_rows($results) > 0) {
    //         echo 'taken';
    //     } else {
           
    //     }
    //     exit();
    // }


    if (isset($_POST['save'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $Lname = $_POST['Lname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            echo "exists";
            exit();
        } else {
            $query = "INSERT INTO user (username, email, password, name, Lname, phone) VALUES ('$username', '$email', '$password' ,  '$name' , '$Lname', ' $phone')";
            $results = mysqli_query($conn, $query);
            echo 'Saved';
            exit();
        }
    }



?>