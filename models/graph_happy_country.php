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

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2), name_country, `year` FROM country_has_years
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        INNER JOIN country ON country_id = id_country
                        WHERE name_country = :name_country
                        GROUP BY `year`');
$stmt->bindValue(':name_country', 'Brazil', PDO::PARAM_STR);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);