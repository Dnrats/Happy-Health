<?php

/* Connexion pdo */
include "./db_login.php";

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2) AS valAVG, `year` FROM country_has_years
                        INNER JOIN vals ON happiness_score = id_val
                        INNER JOIN years ON years_id = id_years
                        GROUP BY `year`');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res);