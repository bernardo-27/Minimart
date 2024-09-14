<?php
session_start();
include_once "connect.php";


$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$EnteredPassword = $_POST['password'] ?? '';


$stmt = $con->prepare("SELECT * FROM tb_account WHERE username = ? AND email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];
    $accountStatus = $row['accountStatus'];

    
    if ($EnteredPassword === $storedPassword) {
        $redirectUrl = ($accountStatus === 'Admin') ? 'admin.php' : 'user.php';
        header("Location: $redirectUrl ");
        exit;
    } else {
        echo "<script>alert('Error: Password verification failed!'); window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Error: No matching user found!'); window.location.href='index.html';</script>";
}


$stmt->close();
session_destroy();
exit;
?>
