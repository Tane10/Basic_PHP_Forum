<?php
if (isset($_POST['submit'])) {
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    $contactNumber = $_POST['contactNumber'];

    echo $name . $email . $password . $location  . $contactNumber;

    echo "<script type='text/javascript'>alert('$name . $email . $password . $location  . $contactNumber';</script>";
}
?>
