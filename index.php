<?php
session_start();

if(isset($_SESSION['username'])){
    echo "Logged in as " . $_SESSION['username'] . "<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "You are not logged in<br>";
    echo "<a href='login.php'>Login</a>";
}
