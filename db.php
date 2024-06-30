<?php
// config/database.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {

    if (!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $fname = $_POST['name'];
        $emai = $_POST['email'];
        $message = $_POST['message'];


        $query = "insert into form(fname,email,message) values('$fname','$emai','$message')";

        $run = mysqli_query($conn, $query) or die(mysqli_error());
        if ($run) {
            echo "Success ahkafk fakhakh kakhf hff kkhkiakehuekc  khdkhfiue";
        } else {
            echo "Error jajdhahkahkhakakakakk akjkdaaf ahkaf ahkasfka a";
        }

    } else {
        echo "All fields are required";
    }
}
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

?>