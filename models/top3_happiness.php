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

$stmt = $db->prepare('SELECT name_country, `year`, val FROM country_has_years
                        INNER JOIN country ON country_id = id_country
                        INNER JOIN years ON years_id = id_years
                        INNER JOIN vals ON happiness_rank = id_val
                        WHERE `year` = :year
                        ORDER BY val
                        LIMIT 3');
$stmt->bindValue(':year', 2019, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);