<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin/Homepage/Catriz's Minimart Item Stock list</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="website icon" type="png" href="pictures/logo.png">
</head>

<body>
<div class="header">
    <form action="logout.php" method="post">
        <a href=""><button class="log" type="submit">Log Out</button></a>
    </form>
    <div class="btn">
    <button class="add" onclick="document.getElementById('addProductModal').style.display='block'">Add New Products</button>
        <a href="accounts.php"><button  href="" class="acc">User accounts</button>  </a>
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
                    echo '<th>Date Delivered</th>';
                    echo '<th>Action</th>';
                    echo '</tr>';

                    while ($row1 = mysqli_fetch_array($result_search)) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row1['PRODUCT_ID']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['PRODUCT_NAME']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['SIZE_AVAILABLE']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['STOCKS_AVAILABLE']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['PRICE']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['TYPE']) . '</td>';
                        echo '<td>' . htmlspecialchars($row1['DATE_DELIVERED']) . '</td>';
                        echo '<td>';
                        echo '<button class="update-btn" data-update-id="' . htmlspecialchars($row1['PRODUCT_ID']) . '">Update</button>';
                        echo '<button class="delete-btn"><a href="delete.php?PRODUCT_ID=' . htmlspecialchars($row1['PRODUCT_ID']) . '">Delete</a></button>';
                        echo '</td>';
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
        $sql_profile = "SELECT * FROM tb_stock LIMIT $records_per_page OFFSET $offset";
        $result_profile = mysqli_query($con, $sql_profile);

        echo '<table>';
        echo '<tr>';
        echo '<th></th>';
        echo '<th>Product Name</th>';
        echo '<th>Size Available</th>';
        echo '<th>Stocks Available</th>';
        echo '<th>Price</th>';
        echo '<th>Type</th>';
        echo '<th>Date Delivered</th>';
        echo '<th>Action</th>';
        echo '</tr>';

        while ($row1 = mysqli_fetch_array($result_profile)) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row1['PRODUCT_ID']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['PRODUCT_NAME']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['SIZE_AVAILABLE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['STOCKS_AVAILABLE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['PRICE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['TYPE']) . '</td>';
            echo '<td>' . htmlspecialchars($row1['DATE_DELIVERED']) . '</td>';
            echo '<td>';
            echo '<button class="update-btn" data-update-id="' . htmlspecialchars($row1['PRODUCT_ID']) . '">Update</button>';
            echo '<button class="delete-btn"><a href="delete.php?PRODUCT_ID=' . htmlspecialchars($row1['PRODUCT_ID']) . '">Delete</a></button>';
            echo '</td>';
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
<!-- Update product modal -->
<div id="updateModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('updateModal')">&times;</span>
        <form id="updateForm">
            <input type="hidden" name="updateID" id="updateID">
            <table>
                <tr>
                    <td><label for="productName">Product Name:</label></td>
                    <td><input type="text" name="productName" id="productName" required></td>
                </tr>
                <tr>
                    <td><label for="sizeAvailable">Size Available:</label></td>
                    <td><input type="text" name="sizeAvailable" id="sizeAvailable" required></td>
                </tr>
                <tr>
                    <td><label for="stocksAvailable">Stocks Available:</label></td>
                    <td><input type="text" name="stocksAvailable" id="stocksAvailable" list="status-list" required></td>
                </tr>
                <tr>
                    <td><label for="price">Price:</label></td>
                    <td><div class="price-container"><input type="text" name="price" id="priceUpdate" required oninput="formatPrice(this)"></div></td>
                </tr>
                <tr>
                    <td><label for="type">Type:</label></td>
                    <td>
                        <input type="text" name="type" id="type" list="type-list" required>
                        <datalist id="type-list">
                            <option value="Drink">
                            <option value="Condiments">
                            <option value="Beverage">
                            <option value="Snack">
                            <option value="Baby Care">
                            <option value="Household Item">
                            <option value="Personal Care">
                            <option value="Dessert">
                            <option value="Nuts">
                            <option value="Baking Mix">
                            <option value="Grain">
                            <option value="Processed Food">
                            <option value="Noodle">
                            <option value="Sweets">
                            <option value="Cooking Oil">
                            <option value="Pasta">
                            <option value="Baking Ingredients">
                            <option value="Accessory">
                            <option value="Cleaning Tool">
                            <option value="Waste Disposable Item">
                            <option value="Creamer">
                            <option value="Utensil">
                            <option value="Kitchen Essentials">
                            <option value="Ingredients">
                            <option value="Material">
                            <option value="Cleaning Agent">
                            <option value="Spread">
                            <option value="Cereal">
                        </datalist>
                    </td>
                </tr>
                <tr>
                    <td><label for="dateDelivered">Date Delivered:</label></td>
                    <td><input type="date" name="dateDelivered" id="dateDelivered" required></td>
                </tr>
            </table>
            <button type="submit" id="updateButton">Update</button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the form submission
    document.getElementById('updateForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = new FormData(document.getElementById('updateForm'));

        // Send AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'update.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Handle successful response
                if (xhr.responseText.includes('Update successful')) {
                    alert('Update successful. Redirecting...');
                    window.location.href = 'admin.php';
                } else {
                    alert('Update failed. Please try again.');
                }
            } else {
                // Handle error
                alert('Error: ' + xhr.statusText);
            }
        };
        xhr.onerror = function() {
            // Handle connection error
            alert('Connection error');
        };
        xhr.send(formData);
    });
});

function formatPrice(input) {
    const value = input.value.replace(/[^\d.]/g, ''); // Remove non-numeric characters except for dot
    input.value = value ? '₱' + value : '';
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
}

// Example to open modals, you might have other logic to open these modals
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';
}

// Close modals when clicking outside of the modal content
window.onclick = function(event) {
    const updateModal = document.getElementById('updateModal');
    if (event.target == updateModal) {
        updateModal.style.display = 'none';
    }
}
</script>
    <!-- Add product modal -->
    <div id="addProductModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addProductModal')">&times;</span>
            <form action="addproduct.php" method="post">
                <table>
                    <tr>
                        <td><label for="productName">Product Name:</label></td>
                        <td><input type="text" name="productName" id="productName" required></td>
                    </tr>
                    <tr>
                        <td><label for="sizeAvailable">Size Available:</label></td>
                        <td><input type="text" name="sizeAvailable" id="sizeAvailable" required></td>
                    </tr>
                    <tr>
                        <td><label for="stocksAvailable">Stocks Available:</label></td>
                        <td><input type="number" name="stocksAvailable" id="stocksAvailable" required></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price:</label></td>
                        <td><div class="price-container"><input type="text" name="price" id="price" required oninput="formatPrice(this)"></div></td>
                    </tr>
                    <tr>
                        <td><label for="type">Type:</label></td>
                        <td>
                            <input type="text" name="type" id="type" list="type-list" required>
                            <datalist id="type-list">
                                <option value="Drink">
                                <option value="Condiments">
                                <option value="Beverage">
                                <option value="Snack">
                                <option value="Baby Care">
                                <option value="Pantry">
                                <option value="Household Item">
                                <option value="Personal Care">
                                <option value="Dessert">
                                <option value="Nuts">
                                <option value="Baking Mix">
                                <option value="Grain">
                                <option value="Processed Food">
                                <option value="Noodle">
                                <option value="Sweets">
                                <option value="Cooking Oil">
                                <option value="Pasta">
                                <option value="Baking Ingredients">
                                <option value="Accessory">
                                <option value="Cleaning Tool">
                                <option value="Waste Disposable Item">
                                <option value="Creamer">
                                <option value="Utensil">
                                <option value="Kitchen Essential">
                                <option value="Kitchen Item">
                                <option value="Ingredients">
                                <option value="Material">
                                <option value="Cleaning Agent">
                                <option value="Spread">
                                <option value="Cereal">
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="dateDelivered">Date Delivered:</label></td>
                        <td><input type="date" name="dateDelivered" id="dateDelivered" required></td>
                    </tr>
                </table>
                <button type="submit">Add Product</button>
            </form>
        </div>
    </div>

    <script>
        function formatPrice(input) {
            const value = input.value.replace(/[^\d.]/g, ''); // Remove non-numeric characters except for dot
            input.value = value ? '₱' + value : '';
        }
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
        }
        // Example to open modals, you might have other logic to open these modals
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
        }
        // Close modals when clicking outside of the modal content
        window.onclick = function(event) {
            const updateModal = document.getElementById('updateModal');
            const addProductModal = document.getElementById('addProductModal');
            if (event.target == updateModal) {
                updateModal.style.display = 'none';
            } else if (event.target == addProductModal) {
                addProductModal.style.display = 'none';
            }
        }
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const updateButtons = document.querySelectorAll('.update-btn');
        const updateModal = document.getElementById('updateModal');
        const updateSpan = updateModal.querySelector('.close'); // query the span inside the updateModal

        updateButtons.forEach(button => {
            button.addEventListener('click', () => {
                const updateID = button.getAttribute('data-update-id');
                const row = button.parentNode.parentNode.children;
                const productName = row[1].innerText;
                const sizeAvailable = row[2].innerText;
                const stocksAvailable = row[3].innerText;
                const price = row[4].innerText;
                const type = row[5].innerText;
                const dateDelivered = row[6].innerText;

                document.getElementById('updateID').value = updateID;
                document.getElementById('productName').value = productName;
                document.getElementById('sizeAvailable').value = sizeAvailable;
                document.getElementById('stocksAvailable').value = stocksAvailable;
                document.getElementById('price').value = price;
                document.getElementById('type').value = type;
                document.getElementById('dateDelivered').value = dateDelivered;

                updateModal.style.display = 'block';
            });
        });

        updateSpan.addEventListener('click', () => {
            updateModal.style.display = 'none';
        });

        window.addEventListener('click', e => {
            if (e.target === updateModal) {
                updateModal.style.display = 'none';
            }
        });

        // Get the modal
        var addProductModal = document.getElementById("addProductModal");
        var addBtn = document.querySelector(".add");
        var addSpan = addProductModal.querySelector('.close'); // query the span inside the addProductModal

        addBtn.onclick = function() {
            addProductModal.style.display = "block";
        }

        addSpan.addEventListener('click', function() {
            addProductModal.style.display = "none";
        });

        window.addEventListener('click', event => {
            if (event.target == addProductModal) {
                addProductModal.style.display = "none";
            }
        });

        // Get the modal
        var accountsModal = document.getElementById("accountsModal");
        var accBtn = document.querySelector(".acc");
        var accSpan = accountsModal.querySelector('.close'); // query the span inside the accountsModal

        accBtn.onclick = function() {
            accountsModal.style.display = "block";
        }

        accSpan.addEventListener('click', function() {
            accountsModal.style.display = "none";
        });

        window.addEventListener('click', event => {
            if (event.target == accountsModal) {
                accountsModal.style.display = "none";
            }
        });
    });
</script>
<footer>
    <div class="copy">
        <p>&copy;Copyright 2023-2024@ Catriz's Minimart Item.Stock list</p>
    </div>
</footer>

</body>
</html>