<?php

if (isset($_POST['submitEmail'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    echo "<h4>Welcome ". $name ."</h4>";
    echo "<h4>Email: ". $email ."</h4>";
    echo "<h4>Password: ". $password ."</h4>";
}

?>
<!DOCTYPE html>
<html>
    <form action="form.php" method="GET">
        <input name="email" type="email" required placeholder="Enter your email"><br>
        <input name="name" type="text" required placeholder="Enter your name"><br>
        <input type="password" required placeholder="Enter your password" name="password"><br>
        <button type="submit" name="submitEmail">Submit</button>
    </form>

<html