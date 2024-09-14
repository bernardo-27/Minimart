<?php
include_once "connect.php";

$updateID = $_POST['updateID'];

$productName = ucwords(mysqli_real_escape_string($con, $_POST['productName']));
$sizeAvailable = mysqli_real_escape_string($con, $_POST['sizeAvailable']);
$stocksAvailable = mysqli_real_escape_string($con, $_POST['stocksAvailable']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$type = ucwords(mysqli_real_escape_string($con, $_POST['type']));
$dateDelivered = mysqli_real_escape_string($con, $_POST['dateDelivered']);

$stmt = $con->prepare("UPDATE tb_stock SET
    `PRODUCT_NAME` = ?, 
    `SIZE_AVAILABLE` = ?, 
    `STOCKS_AVAILABLE` = ?, 
    `PRICE` = ?, 
    `TYPE` = ?, 
    `DATE_DELIVERED` = ?
WHERE `PRODUCT_ID` = ?");
$stmt->bind_param("ssssssi", $productName, $sizeAvailable, $stocksAvailable, $price, $type, $dateDelivered,  $updateID);
$result = $stmt->execute();

if ($result) {
    // If the update was successful
    // You can echo any HTML content that you want to replace on the admin page
    // For example, you can echo a success message or updated product details
    echo "<div class='success-message'>Update successful.</div>";
} else {
    // If the update failed
    echo "<div class='error-message'>Update failed. Please try again.</div>";
}
?>
