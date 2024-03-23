<?php
// Include the database connection file
include_once "db.php";

if(isset($_POST['package_id'])) {
    $packageId = $_POST['package_id'];
    
    // Fetch the price from the database based on the package_id
    $query = "SELECT price FROM price WHERE id = $packageId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo $row['price'];
    } else {
        echo "Error fetching price from the database.";
    }
}
?>
