<?php 
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "countries");
define('DB_DRIVER', "mysql");

$country = isset($_POST['country']) ? $_POST['country'] : '';

try {
    $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO country(location) VALUES (:country)");

    $stmt->bindParam(':country', $country, PDO::PARAM_STR, 100);

    if($stmt->execute()) {
    }

    $db = null;
} catch(PDOException $e) {
    trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
}

?>