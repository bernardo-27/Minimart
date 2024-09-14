<?php
session_start();
include_once "connect.php";


$username = isset($_POST['username']) ?  $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$accountStatus = isset($_POST['accountStatus']) ?  $_POST['accountStatus'] : '';

$username = mysqli_real_escape_string($con, $username);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$accountStatus = mysqli_real_escape_string($con, $accountStatus);

$checkQuery = "SELECT COUNT(*) as count FROM tb_account WHERE email = ? OR username = ?";
$stmt = $con->prepare($checkQuery);
$stmt->bind_param("ss",  $email, $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['count'] > 0 ) {
    echo "<script> alert('Account with this email or username already exists');</script>";
    echo "<script> alert('Create another Account');window.location.href='index.html';</script>";
    $stmt->close();
    $con->close();
    exit();
}

$stmt->close();




if ($AccountStatus === 'Admin') {
    $adminCheckQuery = "SELECT COUNT(*) as adminCount FROM tb_accounts WHERE accountStatus = 'Admin'";
    $adminResult = $con->query($adminCheckQuery);

    if ($adminResult) {
        $adminCount = $adminResult->fetch_assoc()['adminCount'];

        if ($adminCount > 0) {
            echo "<script>alert('Error: Account with admin status already exists. Redirecting to sign-up page...'); window.location.href='admin.html?admin=true';</script>";
            $con->close();
            exit();
        }
    } else {
        echo "Error checking admin status: " . $con->error;
        $con->close();
        exit();
    }
}


//Password = password_hash($Password, PASSWORD_DEFAULT);

$sql = "INSERT INTO tb_accounts (`username`, `email`, `password`, `accountStatus`) 
VALUES ('$username', '$email', '$password', '$accountStatus')";

if ($con->query($sql) === TRUE) {
    echo "<script>alert('Account Successfully Registered.');window.location.href='homepage.html';</script>";

} else {
    echo "<script>alert('Registration Failed!.');</script>";
    echo "<script>alert('Error: " . $con->error . "'); window.location.href='homepage.html';</script>";
}

$con->close();
?>
