<?php

/* Connexion pdo */
include "./db_login.php";

$selectYear = $_POST["selectYear"];

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2) AS valAVG, name_region, `year` FROM country_has_years
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        INNER JOIN country ON country_id = id_country
                        INNER JOIN region ON region_id_region = id_region
                        WHERE `year` = :year
                        GROUP BY name_region');
$stmt->bindValue(':year', $selectYear, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res);