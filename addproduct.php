<?php
include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productName = ucwords(mysqli_real_escape_string($con, $_POST['productName']));
    $sizeAvailable = mysqli_real_escape_string($con, $_POST['sizeAvailable']);
    $stocksAvailable = mysqli_real_escape_string($con, $_POST['stocksAvailable']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $type = ucwords(mysqli_real_escape_string($con, $_POST['type']));
    $dateDelivered = mysqli_real_escape_string($con, $_POST['dateDelivered']);

    
    // Check if product already exists
    $sql_check_product = "SELECT * FROM tb_stock WHERE PRODUCT_NAME = ?";
    $stmt_check_product = $con->prepare($sql_check_product);
    $stmt_check_product->bind_param("s", $productName);
    $stmt_check_product->execute();
    $result_check_product = $stmt_check_product->get_result();

    if ($result_check_product->num_rows > 0) {
        echo "<script>alert('Product already exists.'); window.location.href='admin.php';</script>";
    } else {
        $sql_add_product = "INSERT INTO tb_stocklist (PRODUCT_NAME, SIZE_AVAILABLE, STOCKS_AVAILABLE, PRICE, DATE_DELIVERED, TYPE) 
                            VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql_add_product);
        $stmt->bind_param("ssssss", $productName, $sizeAvailable, $stocksAvailable, $price, $dateDelivered, $type);

        if ($stmt->execute()) {
            echo "<script>alert('Product added successfully.'); window.location.href='admin.php';</script>";
        } else {
            echo "Error adding product: " . $stmt->error;
        }
    }

    $stmt->close();
}
?>
