<?php

/* Connexion pdo */
include "../models/db_login.php";

$selectYear = $_POST["selectYear"];

$stmt = $db->prepare('SELECT name_country, MAX(val) AS valMax, `year` FROM country_has_years
                        INNER JOIN country ON country_id = id_country
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        WHERE `year` = :year
                        GROUP BY name_country  
                        ORDER BY `valMax`  DESC');
$stmt->bindValue(':year', $selectYear, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($res);