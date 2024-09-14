<?php
include_once "connect.php";

// Query to get the count of each product type
$sql_drinks = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Drink'";
$sql_desserts = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Dessert'";
$sql_sweetener = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Sweetener'";
$sql_condiments = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Condiments'";
$sql_snack = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Snack'";
$sql_processedFood = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Processed Food'";
$sql_spread = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Spread'";
$sql_babyCare = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Baby Care'";
$sql_personalCare = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Personal Care'";
$sql_food = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Food'";
$sql_cup = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cup'";
$sql_householdItem = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Household Item'";
$sql_cleaningAgent = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cleaning Agent'";
$sql_kitchenEssential = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Kitchen Essential'";
$sql_utensils = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Utensil'";
$sql_grain = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Grain'";
$sql_wasteDisposableItem = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Waste Disposable Item'";
$sql_creamer = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Creamer'";
$sql_accessory = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Accessory'";
$sql_cleaningTool = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cleaning Tool'";
$sql_cereal = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cereal'";
$sql_cracker = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cracker'";
$sql_cookingOil = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Cooking Oil'";
$sql_ingredients = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Ingredient'";
$sql_bakingIngredients = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Baking Ingredient'";
$sql_nuts = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Nuts'";
$sql_pasta = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Pasta'";
$sql_seasoning = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Seasoning'";
$sql_noodle = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Noodle'";
$sql_bakingMix = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Baking Mix'";
$sql_sweets = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Sweets'";
$sql_beverage = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Beverage'";
$sql_material = "SELECT COUNT(*) as count FROM tb_stock WHERE TYPE = 'Material'";


$result_drinks = mysqli_query($con, $sql_drinks);
$result_desserts = mysqli_query($con, $sql_desserts);
$result_sweetener = mysqli_query($con, $sql_sweetener);
$result_condiments = mysqli_query($con, $sql_condiments);
$result_snack = mysqli_query($con, $sql_snack);
$result_processedFood = mysqli_query($con, $sql_processedFood);
$result_spread = mysqli_query($con, $sql_spread);
$result_babyCare = mysqli_query($con, $sql_babyCare);
$result_personalCare = mysqli_query($con, $sql_personalCare);
$result_food = mysqli_query($con, $sql_food);
$result_cup = mysqli_query($con, $sql_cup);
$result_householdItem = mysqli_query($con, $sql_householdItem);
$result_cleaningAgent = mysqli_query($con, $sql_cleaningAgent);
$result_kitchenEssential = mysqli_query($con, $sql_kitchenEssential);
$result_utensils = mysqli_query($con, $sql_utensils);
$result_grain = mysqli_query($con, $sql_grain);
$result_wasteDisposableItem = mysqli_query($con, $sql_wasteDisposableItem);
$result_creamer = mysqli_query($con, $sql_creamer);
$result_accessory = mysqli_query($con, $sql_accessory);
$result_cleaningTool = mysqli_query($con, $sql_cleaningTool);
$result_cereal = mysqli_query($con, $sql_cereal);
$result_cracker = mysqli_query($con, $sql_cracker);
$result_cookingOil = mysqli_query($con, $sql_cookingOil);
$result_ingredients = mysqli_query($con, $sql_ingredients);
$result_bakingIngredients = mysqli_query($con, $sql_bakingIngredients);
$result_nuts = mysqli_query($con, $sql_nuts);
$result_pasta = mysqli_query($con, $sql_pasta);
$result_seasoning = mysqli_query($con, $sql_seasoning);
$result_noodle = mysqli_query($con, $sql_noodle);
$result_bakingMix = mysqli_query($con, $sql_bakingMix);
$result_sweets = mysqli_query($con, $sql_sweets);
$result_beverage = mysqli_query($con, $sql_beverage);
$result_material = mysqli_query($con, $sql_material);

$count_drinks = mysqli_fetch_assoc($result_drinks)['count'];
$count_desserts = mysqli_fetch_assoc($result_desserts)['count'];
$count_sweetener = mysqli_fetch_assoc($result_sweetener)['count'];
$count_condiments = mysqli_fetch_assoc($result_condiments)['count'];
$count_snack = mysqli_fetch_assoc($result_snack)['count'];
$count_processedFood = mysqli_fetch_assoc($result_processedFood)['count'];
$count_spread = mysqli_fetch_assoc($result_spread)['count'];
$count_babyCare = mysqli_fetch_assoc($result_babyCare)['count'];
$count_personalCare = mysqli_fetch_assoc($result_personalCare)['count'];
$count_food = mysqli_fetch_assoc($result_food)['count'];
$count_cup = mysqli_fetch_assoc($result_cup)['count'];
$count_householdItem = mysqli_fetch_assoc($result_householdItem)['count'];
$count_cleaningAgent = mysqli_fetch_assoc($result_cleaningAgent)['count'];
$count_kitchenEssential = mysqli_fetch_assoc($result_kitchenEssential)['count'];
$count_utensils = mysqli_fetch_assoc($result_utensils)['count'];
$count_grain = mysqli_fetch_assoc($result_grain)['count'];
$count_wasteDisposableItem = mysqli_fetch_assoc($result_wasteDisposableItem)['count'];
$count_creamer = mysqli_fetch_assoc($result_creamer)['count'];
$count_accessory = mysqli_fetch_assoc($result_accessory)['count'];
$count_cleaningTool = mysqli_fetch_assoc($result_cleaningTool)['count'];
$count_cereal = mysqli_fetch_assoc($result_cereal)['count'];
$count_cracker = mysqli_fetch_assoc($result_cracker)['count'];
$count_cookingOil = mysqli_fetch_assoc($result_cookingOil)['count'];
$count_ingredients = mysqli_fetch_assoc($result_ingredients)['count'];
$count_bakingIngredients = mysqli_fetch_assoc($result_bakingIngredients)['count'];
$count_nuts = mysqli_fetch_assoc($result_nuts)['count'];
$count_pasta = mysqli_fetch_assoc($result_pasta)['count'];
$count_seasoning = mysqli_fetch_assoc($result_seasoning)['count'];
$count_noodle = mysqli_fetch_assoc($result_noodle)['count'];
$count_bakingMix = mysqli_fetch_assoc($result_bakingMix)['count'];
$count_sweets = mysqli_fetch_assoc($result_sweets)['count'];
$count_beverage = mysqli_fetch_assoc($result_beverage)['count'];
$count_material = mysqli_fetch_assoc($result_material)['count'];

// Fetch the most recent products (limit to 18)
$sql_recent_products = "
    SELECT PRODUCT_NAME 
    FROM ( SELECT PRODUCT_NAME 
        FROM tb_stock
        ORDER BY DATE_DELIVERED DESC 
        LIMIT 18 ) AS recent_products
        ORDER BY PRODUCT_NAME ASC ";
$result_recent_products = mysqli_query($con, $sql_recent_products);

// Fetch total products added per 12 months
$sql_monthly_totals = "
    SELECT DATE_FORMAT(DATE_DELIVERED, '%Y-%m') as month, COUNT(*) as total_count
    FROM tb_stock
    WHERE DATE_DELIVERED >= CURDATE() - INTERVAL 12 MONTH
    GROUP BY DATE_FORMAT(DATE_DELIVERED, '%Y-%m')
    ORDER BY month ASC";
$result_monthly_totals = mysqli_query($con, $sql_monthly_totals);

$monthly_totals = [];
while ($row = mysqli_fetch_assoc($result_monthly_totals)) {
    $monthly_totals[$row['month']] = $row['total_count'];
}
$sql_product_types = "
    SELECT DATE_FORMAT(DATE_DELIVERED, '%Y-%m') as month, TYPE, COUNT(*) as count
    FROM tb_stock
    WHERE DATE_DELIVERED >= CURDATE() - INTERVAL 12 MONTH
    GROUP BY DATE_FORMAT(DATE_DELIVERED, '%Y-%m'), TYPE
    ORDER BY month ASC";
$result_product_types = mysqli_query($con, $sql_product_types);

$product_types = [];
while ($row = mysqli_fetch_assoc($result_product_types)) {
    $product_types[] = $row;
}
// Calculate percentages for each product type per month
$product_type_percentages = [];
foreach ($product_types as $type) {
    $month = $type['month'];
    $total_count = isset($monthly_totals[$month]) ? $monthly_totals[$month] : 1;
    $percentage = ($type['count'] / $total_count) * 100;
    $product_type_percentages[$month][$type['TYPE']] = $percentage;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0'>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="website icon" type="png" href="pictures/logo.png">
    <title>Dashboard/Catriz's Minimart Item Stock List</title>

</head>

<body>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Catriz's Minimart Stocklist</span>
</div>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row ">
        <div class="w3-col s4">
            <img src="logo.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Welcome, to <br> <strong>Catriz's Minimart</strong> Stocklist</span>
        </div>
    </div>
        <hr>
    <div class="w3-container">
        <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
        <a href="index.html" class="w3-bar-item w3-button"><i class="fa fa-home"></i>  Homepage</a>
        <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" onclick="showmoreitemsAlert()"><i class='bx bxs-cart'></i></i>  Products</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" onclick="openLoginForm()"><i class="fa fa-sign-in fa-fw"></i>  Log-In</a>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <div class="w3-main" id="main-content" style="margin-left:300px;margin-top:43px;">
        <!-- Header -->
        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> Dashboard</b></h5>
        </header>

    <!-- !PAGE CONTENT! -->
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class='bx bxs-drink w3-large'></i></i></div>
                <div class="w3-right">
                    <h6><?php echo $count_drinks; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h4>Drinks</h4>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class='bx bxs-bowl-rice w3-large'></i></i></div>
                <div class="w3-right">
                    <h6><?php echo $count_ingredients; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h4>Ingredients</h4>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class='bx bxs-popsicle w3-large'></i></div>
                <div class="w3-right">
                    <h6><?php echo $count_desserts; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h4>Desserts</h4>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class='bx bx-knife w3-large'></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_utensils; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h4>Utensils</h4>
            </div>
        </div>


<div class="modalBtn">
    <button id="openModalBtn">More</button>
</div>
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-quarter">
                <div class="w3-container w3-text-white w3-padding-16" data-name="Beverages">
                    <div class="w3-left"><i class="w3-large"></i></div>
                    <div class="w3-right">
                        <h6><?php echo $count_beverage; ?></h6>
                    </div>
                    <div class="w3-clear"></div>
                    <h6>Beverages</h6>
                </div>
            </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_snack; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Snacks</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_householdItem; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Household Item</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_babyCare; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Baby Care</h6>
            </div>
        </div>
    </div>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_personalCare; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Personal Care</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_nuts; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Nuts</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_bakingMix; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Baking Mix</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_grain; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Grain</h6>
            </div>
        </div>
        </div>
        <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_processedFood; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Processes Food</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_noodle; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Noodle</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_sweets; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Sweets</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_cookingOil; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Cooking Oil</h6>
            </div>
        </div>
        </div>
        <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_pasta; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h4>Pasta</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_bakingIngredients; ?>pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Baking Ingredients</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_accessory; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Accessories</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_cleaningTool; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Cleaning Tools</h6>
            </div>
        </div>
        </div>
        <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_creamer; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Creamer</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_condiments; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Condiments</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_kitchenEssential; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Kitchen Essentials</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_material; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Materials</h6>
            </div>
        </div>
        </div>
        <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_cleaningAgent; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Cleaning Agents</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_spread; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Spread</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_cereal; ?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Cereal</h6>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-users w3-large"></i></div>
                <div class="w3-right">
                    <h6> <?php echo $count_wasteDisposableItem ;?> pieces</h6>
                </div>
                <div class="w3-clear"></div>
                <h6>Disposable Items</h6>
            </div>
        </div>
        </div>
    </div>
</div>
</div>

<script>
// Function to generate a random dark color
function getRandomDarkColor() {
    var letters = '012345';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * letters.length)];
    }
    return color;
}

var iconMap = {
    'Beverages': '',
    'Snacks': '',
    'Household Item': '',
    'Baby Care': '',
    'Personal Care': '',
    'Nuts': '',
    'Baking Mix': '',
    'Grain': '',
    'Processed Food': '',
    'Noodle': '',
    'Sweets': '',
    'Cooking Oil': '',
    'Pasta': '',
    'Baking Ingredients': '',
    'Accessories': '',
    'Cleaning Tools': '',
    'Creamer': '',
    'condiments': '',
    'Kitchen Essentials': '',
    'Materials': '',
    'Cleaning Agents': '',
    'Spread': '',
    'Cereal': '',
    'Disposable Items': ''
};

// Get the modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
    var containers = modal.querySelectorAll(".w3-container");
    containers.forEach(function(container) {
        container.style.backgroundColor = getRandomDarkColor();
        var itemName = container.getAttribute('data-name');
        var iconClass = iconMap[itemName] || 'fa-question'; // Default to a question mark if no icon is found
        var iconElement = container.querySelector('i');
        iconElement.className = 'fa ' + iconClass + ' w3-large';
    });
}
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
</script>
<!-- More Items Link -->
<div class="w3-container more">
    <button class="moreItems-btn">More Products...</button>
    <span class="more-items" id="moreItems">You need to log in first to view products.</span>
    <span id="itemsAlert">You need to log in first to view products.</span>
</div>

<!-- Recent Products -->
<div class="w3-container">
    <h5 class="recent-products">Recently Added Products</h5>
    <div class="w3-ul w3-card-4 product-grid">
        <?php
        if (mysqli_num_rows($result_recent_products) > 0) {
            while ($row = mysqli_fetch_assoc($result_recent_products)) {
                $product_name = htmlspecialchars($row['PRODUCT_NAME']);
                // $image_path = htmlspecialchars($row['IMAGE_PATH']); // Assuming 'IMAGE_PATH' is the column name for image path
                echo '<div class="product-item w3-padding-7">';
                // echo '<img src="' . $image_path . '" class="w3-left w3-circle w3-margin-right" style="width:40px; height: 40px;">';
                echo '<span class="product-title">' . $product_name . '</span><br>';
                echo '</div>';
            }
        } else {
            echo '<div class="w3-padding-16">No recent products found.</div>';
        }
        ?>
    </div>
</div>
<hr>


<!-- Login Form and Signup Form-->
    <div class="overlay" id="overlay" onclick="closeForm()"></div>
        <div class="form-popup" id="form">
            <span class="close-btn material-symbols-rounded" onclick="closeForm()">close</span>
            <div class="form-box login" id="login-form">
                <div class="form-details">
                    <h2 class="form-title">Welcome</h2>
                    <p class="form-p">Catriz Minimart item Stocklist</p>
                </div>
                <div class="form-content">
                    <form action="Logscript.php" method="post">
                        <div class="input-field">
                            <input type="text" name="username" id="username" required>
                            <label>Username</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="password" required>
                            <label>Password</label>
                        </div>
                        <a href="#" class="forgot-pass-link">Forgot password?</a>
                        <button type="submit">Log In</button>
                    </form>
                    <div class="bottom-link">
                        Don't have an account?
                        <a href="#" id="signup-link">Signup</a>
                    </div>
                </div>
            </div>
            <div class="form-box signup" id="signup-form" style="display: none;">
                <div class="form-details">
                    <h2 class="form-title">Create Account</h2>
                    <p class="form-p">To access more about Catriz Minimart Stocklist</p>
                </div>
                <div class="form-content">
                    <form action="Sign-Script.php" method="post">
                        <div class="input-field">
                            <input type="text" name="username" id="username" required>
                            <label>Enter Username</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email" required>
                            <label>Enter Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="password" required>
                            <label>Create Password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="repassword" id="repassword" required>
                            <label>Re-enter Password</label>
                        </div>
                        <div class="policy-text">
                            <input type="checkbox" id="policy" required>
                            <label for="policy">      
                                I agree to the 
                                <a href="#" class="option" onclick="openTermsPopup()">Terms & Conditions</a>
                            </label>
                        </div>
                        <button type="submit">Sign Up</button>
                    </form>
                    <div class="bottom-link">
                        Already have an account?
                        <a href="#" id="login-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Form Popup for Terms and Conditions -->
    <div class="form-popup conditions" id="terms-popup">
        <div class="form-box terms">
            <div class="form-details">
                <h2 class="terms-title">Terms and Conditions:</h2>
                <p class="terms-content">Welcome to Catriz MiniMart! By signing up for our service, you agree to comply with and be bound by the following terms and conditions. Please review these terms carefully before completing your registration. </p>
                <p class="terms-p"> 
                    <strong>1.</strong> By signing up for Catriz MiniMart, you agree to their Terms and Conditions, which are crucial for a transparent relationship. Changes to these terms are effective immediately upon posting, and your continued use implies acceptance.<br>
                    <strong>2.</strong> During registration, you must provide accurate information and safeguard your account credentials. Failure to do so may result in account compromise, for which Catriz MiniMart holds no liability. Additionally, your use of the service is governed by their Privacy Policy. <br>
                    <strong>3.</strong> Users must refrain from using the service unlawfully or in a manner that could damage Catriz MiniMart's systems. Intellectual property rights are protected, and unauthorized use is strictly prohibited, with termination being a possibility for violations.<br>
                    <strong>4.</strong> Catriz MiniMart provides their service "as-is" with no warranties, and they disclaim all liability for damages. These terms are governed by the law, and any disputes shall be resolved in specified courts, with users agreeing to their jurisdiction.</p>
                <p class="terms-content">Clicking "Sign Up" indicates your agreement to abide by the presented Terms and Conditions, acknowledging that electronic acceptance holds the same weight as a physical signature.</p>
                <button class="terms-btn" onclick="agreeTerms()">I Agree</button>
            </div>
        </div>
</div>


    <!-- Chart Section -->
    <div class="w3-container" style="margin-top:20px;">
        <h5 class="chart-title">Yearly Product Type Percentages and Total Products Added</h5>
        <canvas id="monthlyProductTypesChart"></canvas>
    </div>

<!-- Chart -->
<script>
    // Data for the chart
    const monthlyTotals = <?php echo json_encode($monthly_totals); ?>;
    const productTypePercentages = <?php echo json_encode($product_type_percentages); ?>;
    const productTypes = [];
    for (const month in productTypePercentages) {
        for (const type in productTypePercentages[month]) {
            if (!productTypes.includes(type)) {
                productTypes.push(type);
            }
        }
    }
    // Extract the last 12 months
    const lastTenMonths = Object.keys(monthlyTotals).slice(-12);
    const percentageDatasets = productTypes.map(type => {
        const data = [];
        for (const month of lastTenMonths) {
            data.push(productTypePercentages[month]?.[type] || 0);
        }
        return {
            label: `${type} (%)`,
            data: data,
            type: 'bar',
            borderColor: getRandomColor(),
            backgroundColor: getRandomColor(0.9),
            borderWidth: 2,
            fill: false
        };
    });

    // Prepare the dataset for total products added per month
    const totalProductsData = [];
    for (const month of lastTenMonths) {
        totalProductsData.push(monthlyTotals[month] || 0);
    }
    const totalProductsDataset = {
        label: 'Total Products Added',
        data: totalProductsData,
        type: 'line',
        backgroundColor: 'rgba(142, 123, 255, .9)',
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 1
    };
    const labels = lastTenMonths;

    // Function to get random color
    function getRandomColor(opacity = 1) {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 7; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return `rgba(${parseInt(color.substr(1, 2), 16)}, ${parseInt(color.substr(3, 2), 16)}, ${parseInt(color.substr(5, 2), 16)}, ${opacity})`;
    }

    // Chart.js configuration
    const ctx = document.getElementById('monthlyProductTypesChart').getContext('2d');
    const monthlyProductTypesChart = new Chart(ctx, {
        data: {
            labels: labels,
            datasets: [totalProductsDataset, ...percentageDatasets]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'White'
                    },
                    title: {
                        display: true,
                        text: 'Products and Percentages',
                        color: 'white'
                    },
                    ticks: {
                        color: 'White'
                    }
                },
                x: {
                    grid: {
                        color: 'White'
                    },
                    ticks: {
                        color: 'White'
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'White'
                    }
                }
            }
        }
    });
</script>


<div class="footer">
    <div class="copy">
        <p>&copy;Copyright 2023-2024@Catriz's Minimart Item.Stock list</p>
    </div>      
</div>

<script>  
    // Login and Signup
    function openLoginForm() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('form').style.display = 'block';
        document.querySelector('.login').style.display = 'block';
        document.querySelector('.signup').style.display = 'none';
    }
    document.getElementById("signup-link").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("login-form").style.display = "none";
        document.getElementById("signup-form").style.display = "block";
    });
    document.getElementById("login-link").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("signup-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
    });
    function closeForm() {
        document.getElementById("form").style.display = "none";
        document.getElementById('overlay').style.display = 'none';
    }

    // Terms and Conditions
    function openTermsPopup() {
        document.getElementById('terms-popup').style.display = 'block';
        document.getElementById('signup-btn').disabled = true;
    }  
    function agreeTerms() {
        document.getElementById('terms-popup').style.display = 'none';
        document.getElementById('policy').checked = true;
    }

    // More Items Alert
    var button = document.querySelector('.moreItems-btn');
        var inlineAlert = document.getElementById('moreItems');
        button.addEventListener('click', function() {
            inlineAlert.style.display = 'inline';
            setTimeout(function() {
                inlineAlert.style.display = 'none';
            }, 3000);
        });
    function showmoreitemsAlert() {
        document.getElementById('itemsAlert').style.display = 'block';
        setTimeout(function() {
            document.getElementById('itemsAlert').style.display = 'none';
        }, 3000);
    }

    // Get the Sidebar/ navbars
    var mySidebar = document.getElementById("mySidebar");
    var overlayBg = document.getElementById("myOverlay");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>
</body>
</html>
