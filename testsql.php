<?php
    $tk = $_POST['username'];
    $mk = $_POST['password'];
    $email = $_POST['email'];
    $db = mysqli_connect("localhost", "root", "", "animewiki");
    $sql = "insert into user values ('$tk','$mk','$email')";
    $rs = mysqli_query($db, $sql);
    
?>