<?php
include_once "connect.php";

if (isset($_GET['PRODUCT_ID'])) {
    $id = mysqli_real_escape_string($con, $_GET['PRODUCT_ID']);

    // Check if 'confirm' parameter is set indicating that user confirmed deletion
    if(isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        $sql_delete = "DELETE FROM tb_stock WHERE PRODUCT_ID = $id";
        $result_delete = mysqli_query($con, $sql_delete);

        // Check if the query was successful
        if ($result_delete) {
            header("Location: admin.php"); // Redirect to the admin page after successful deletion
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Ask for confirmation before deletion
        echo '<script>
                var confirmed = confirm("Are you sure you want to delete this item?");
                if (confirmed) {
                    window.location.href = "delete.php?PRODUCT_ID='.$id.'&confirm=yes"; // Redirect with confirmation
                } else {
                    window.location.href = "admin.php"; // Redirect back to admin page if not confirmed
                }
            </script>';
    }
} else {
    header("Location: admin.php"); // Redirect to the admin page if the PRODUCT_ID is not set
    exit();
}

mysqli_close($con); // Close the database connection
?>
