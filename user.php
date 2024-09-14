<!DOCTYPE html>
<html>
<head>
    <title>User/Homepage/Catriz's Minimart Item Stock list/user</title>
    <link rel="stylesheet" href="users.css">

    <link rel="website icon" type="png" href="pictures/logo.png">
</head>

<body>

<div class="header">
    <form action="logout.php" method="post">
        <a href=""><button class="log" type="submit">Log Out</button></a>
    </form>
    <div class="img">
        <img src="logo.png" alt="">
    </div>
</div>

<div class="search-bar">
    <h2>Search Products</h2>
    <form action="" method="post">
        <input type="text" name="searchTerm" placeholder="Enter product name">
        <input class="search" type="submit" name="search" value="Search">
    </form>
</div>


<div class="data">
<?php
    include_once "connect.php";

    $searchTerm = '';
    $searchPerformed = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['reset'])) {
          // Reset search term and display all records
            $searchTerm = '';
            $searchPerformed = false;
        } elseif (isset($_POST['searchTerm'])) {
            $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);

        if (!empty($searchTerm)) {
            // User performed a search
            $sql_search = "SELECT * FROM tb_stock WHERE PRODUCT_NAME LIKE '%$searchTerm%'";
            $result_search = mysqli_query($con, $sql_search);

            if ($result_search && mysqli_num_rows($result_search) > 0) {
                echo '<table>';
                echo '<tr>';
                echo '<th></th>';
                echo '<th>Product Name</th>';
                echo '<th>Size Available</th>';
                echo '<th>Stocks Available</th>';
                echo '<th>Price</th>';
                echo '<th>Type</th>';
                echo '</tr>';

                while ($row1 = mysqli_fetch_array($result_search)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row1['PRODUCT_ID']) . '</td>';
                    echo '<td>' . htmlspecialchars($row1['PRODUCT_NAME']) . '</td>';
                    echo '<td>' . htmlspecialchars($row1['SIZE_AVAILABLE']) . '</td>';
                    echo '<td>' . htmlspecialchars($row1['STOCKS_AVAILABLE']) . '</td>';
                    echo '<td>' . htmlspecialchars($row1['PRICE']) . '</td>';
                    echo '<td>' . htmlspecialchars($row1['TYPE']) . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                $searchPerformed = true; 
            }
        }
    }
}

    if (!$searchPerformed || empty($searchTerm)) {
        // Display all records if no search is performed or if the search term is empty
        $sql_total = "SELECT COUNT(*) as total FROM tb_stock";
        $result_total = mysqli_query($con, $sql_total);
        $row_total = mysqli_fetch_assoc($result_total);
        $total_records = $row_total['total'];

        // Determine the number of records per page
        $records_per_page = 20;

        // Determine the total number of pages
        $total_pages = ceil($total_records / $records_per_page);

        // Get the current page from the URL
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Calculate the offset for the current page
        $offset = ($page - 1) * $records_per_page;
        if ($offset < 0) {
            $offset = 0; // Make sure offset is not negative
        }

        // Modify the SQL query to fetch the records for the current page
        $sql_profile = "SELECT * FROM tb_stockl LIMIT $records_per_page OFFSET $offset";
        $result_profile = mysqli_query($con, $sql_profile);

        echo '<table>';
        echo '<tr>';
        echo '<th></th>';
        echo '<th>Product Name</th>';
        echo '<th>Size Available</th>';
        echo '<th>Stocks Available</th>';
        echo '<th>Price</th>';
        echo '<th>Type</th>';
        echo '</tr>';

        while ($row1 = mysqli_fetch_array($result_profile)) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row1['PRODUCT_ID']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['PRODUCT_NAME']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['SIZE_AVAILABLE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['STOCKS_AVAILABLE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['PRICE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['TYPE']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        // Page Numbers
        echo '<div class="pages">';
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                echo '<span>' . $i . '</span>';
            } else {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
        }
        echo '</div>';
    }
?>
</div>
<footer>
        <div class="copy">
            <p>&copy;Copyright 2023-2024@ Catriz's Minimart Item.Stock list</p>
        </div> 
</footer>
</body>
</html>
