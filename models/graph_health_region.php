<?php

/* Connexion pdo */
include "./db_login.php";

$stmt = $db->prepare('SELECT ROUND(AVG(val), 2), name_region, `year` FROM country_has_years
                        INNER JOIN vals ON health_score = id_val
                        INNER JOIN years ON years_id = id_years
                        INNER JOIN country ON country_id = id_country
                        INNER JOIN region ON region_id_region = id_region
                        WHERE `year` = :year
                        GROUP BY name_region');
$stmt->bindValue(':year', 2019, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

json_encode($res);