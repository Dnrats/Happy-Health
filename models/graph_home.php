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

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2), `year` FROM country_has_years
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        GROUP BY `year`');
$stmt->bindValue(':year', 2019, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);