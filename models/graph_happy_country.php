<?php

/* Connexion pdo */
include "./db_login.php";

$selectCountry = $_POST["country"];

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2) AS valAVG, name_country, `year` FROM country_has_years
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        INNER JOIN country ON country_id = id_country
                        WHERE name_country = :name_country
                        GROUP BY `year`');
$stmt->bindValue(':name_country', $selectCountry, PDO::PARAM_STR);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res);


/* recup country en php */