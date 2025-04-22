<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = htmlspecialchars($_POST["user"]);
    $message = htmlspecialchars($_POST["message"]);
    $time = date("H:i");

    $entry = "[$time] $user: $message\n";
    file_put_contents("chat.txt", $entry, FILE_APPEND | LOCK_EX);
}
header("Location: index.php");
exit;
?>