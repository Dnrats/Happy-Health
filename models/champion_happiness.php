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

$stmt = $db->prepare('SELECT name_country, MAX(val), `year` FROM country_has_years
                    INNER JOIN country ON country_id = id_country
                    INNER JOIN vals ON happiness_score = id_val
                    INNER JOIN years ON years_id = id_years
                    WHERE `year` = :year
                    GROUP BY name_country  
                    ORDER BY `MAX(val)`  DESC');
$stmt->bindValue(':year', 2015, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);

json_encode($res);