<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Page/Account/Catriz's Minimart Item Stock list</title>
    <link rel="stylesheet" href="admin.css">

    <link rel="website icon" type="png" href="pictures/logo.png">
</head>
<body>
    <div class="account">
        <a href="admin.php" class="back">Back</a>
    </div>    

<div class="data">
<?php
    include_once "connect.php";

$sql = "SELECT * FROM tb_account";
$result_profile = mysqli_query($con, $sql);
echo "<table border='1'>";
echo "<tr>
    <th></th>
    <th>Name</th>
    <th>Email</th>
    <th>Account Status</th>
    <th>Date Created</th>
    </tr>";

while ($row = mysqli_fetch_assoc($result_profile)) {
    echo "<tr><td>";
    echo htmlspecialchars($row['User_id']);
    echo "</td><td>";
    echo htmlspecialchars($row['username']);
    echo "</td><td>";
    echo htmlspecialchars($row['email']);
    echo "</td><td>";
    echo htmlspecialchars($row['accountStatus']);
    echo "</td><td>";
    echo htmlspecialchars($row['date_created']);
}
echo "</table>";
?>
</div>
<footer>
    <div class="accounts">
        <p>&copy;Copyright 2023-2024@ Catriz's Minimart Item.Stock list</p>
    </div> 
</footer>
</body>
</html>