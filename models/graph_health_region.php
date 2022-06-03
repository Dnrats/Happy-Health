<?php

/* Connexion pdo */
include "./db_login.php";

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2), name_region FROM country_has_years
                        INNER JOIN vals ON health_score = id_val
                        INNER JOIN country ON country_id = id_country
                        INNER JOIN region ON region_id_region = id_region
                        GROUP BY name_region');
$stmt->bindValue(':year', 2019, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);