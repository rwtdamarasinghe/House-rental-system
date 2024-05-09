<?php
// Database credentials
$host = 'database-1.cvr5ykqxjc4b.eu-north-1.rds.amazonaws.com';
$port = '1521'; // Default Oracle port
$service_name = '';
$username = 'admin';
$password = 'sfdatabase';

try {
    // Create a PDO connection to Oracle
    $dsn = "oci:dbname=(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port)))(CONNECT_DATA=(SERVICE_NAME=$service_name)))";
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO attributes (optional)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perform database operations here

    // Example: Execute a query
    $query = "SELECT * FROM REGISTATION";
    $stmt = $pdo->query($query);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Process each row
        print_r($row);
    }

    // Close the database connection
    $pdo = null;
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>