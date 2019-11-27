<?php
$db_host="127.0.0.1";
$db_user="root";
$db_password="";
$db_name="brand";
$db_table_name="suscribers";
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
        die('No se ha podido conectar a la base de datos');
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($db_connection) . PHP_EOL;
?>