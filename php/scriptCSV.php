<?php
/* Connexion pdo */
$db_servername = "localhost";
$db_dbname = "happy_health";
$db_username = "phpmyadmin";
$db_password = "apache2luxe";

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

/* Récup les données du csv */
$file = fopen('../world_happiness_report_2015-2022.csv','r');
if ($file !==FALSE) {
    $tab = [];
    while(($row = fgetcsv($file, null, ";", "'", "\n"))!== FALSE){
        array_push($tab, $row);
    }

    /* Region */
    $cible = unique($tab, 3);
    for ($i=0; $i < count($cible); $i++) {    
        if ($cible[$i] != "-") {
            $query_region = $db->prepare('INSERT INTO region (name_region) VALUES (:name_region)');
            $query_region->bindValue(':name_region', $cible[$i], PDO::PARAM_STR);
            $query_region->execute();
        }
    }

    /* Years */
    $cible = unique($tab, 11);
    $query_years = $db->prepare('INSERT INTO years (year) VALUES (:year)');
    for ($i=0; $i < count($cible); $i++) { 
        $query_years->bindValue(':year', $cible[$i], PDO::PARAM_STR);
        $query_years->execute();
    }

    /* Values */
    /* Happiness Rank */
    $cible = unique($tab, 1);
    $query_happiness_rank = $db->prepare('INSERT INTO `vals` (val) VALUES (:val)');
    for ($i=0; $i < count($cible); $i++) { 
        $query_happiness_rank->bindValue(':val', $cible[$i], PDO::PARAM_STR);
        $query_happiness_rank->execute();
    }
    /* Happiness Score */
    $cible = unique($tab, 4);
    $query_happiness_score = $db->prepare('INSERT INTO `vals` (val) VALUES (:val)');
    for ($i=0; $i < count($cible); $i++) { 
        $query_happiness_score->bindValue(':val', round($cible[$i], 2), PDO::PARAM_STR);
        $query_happiness_score->execute();
    }
    /* Health Score */
    $cible = unique($tab, 7);
    $query_health_score = $db->prepare('INSERT INTO `vals` (val) VALUES (:val)');
    for ($i=0; $i < count($cible); $i++) { 
        $query_health_score->bindValue(':val', round($cible[$i], 2), PDO::PARAM_STR);
        $query_health_score->execute();
    }

    /* Country*/
    $cible = unique($tab, 2);

    for ($i=0; $i < count($cible); $i++) {
        $cibleCSV = $db->prepare('SELECT id_region FROM region WHERE name_region = :region');
        $cibleCSV->bindValue(':region', $tab[$i+1][3], PDO::PARAM_STR);
        $cibleCSV->execute();
        $result = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        
        $query_name_country = $db->prepare('INSERT INTO country (name_country, region_id_region) VALUES (:name_country,:region_id_region)');
        $query_name_country->bindValue(':name_country', $cible[$i], PDO::PARAM_STR);
        $query_name_country->bindValue(':region_id_region', $result["id_region"], PDO::PARAM_INT);
        $query_name_country->execute();
    }

    /* Country_has_years */
    for ($i=0; $i < count($tab); $i++) {
        /* id country */
        if (isset($tab[$i+1][2])) {
            $cibleCSV = $db->prepare('SELECT id_country FROM country WHERE name_country = :name_country');
            $cibleCSV->bindValue(':name_country', $tab[$i+1][2], PDO::PARAM_STR);
            $cibleCSV->execute();
            $resultCountry = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        }
        
        /* id years */
        if (isset($tab[$i+1][11])) {
            $cibleCSV = $db->prepare('SELECT id_years FROM years WHERE `year` = :year');
            $cibleCSV->bindValue(':year', $tab[$i+1][11], PDO::PARAM_INT);
            $cibleCSV->execute();
            $resultYear = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        }

        /* happiness rank */
        if (isset($tab[$i+1][1])) {
            $cibleCSV = $db->prepare('SELECT id_val FROM vals WHERE val = :val');
            $cibleCSV->bindValue(':val', $tab[$i+1][1], PDO::PARAM_INT);
            $cibleCSV->execute();
            $resultHappyRank = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        }

        /* happiness score */
        if (isset($tab[$i+1][4])) {
            $cibleCSV = $db->prepare('SELECT id_val FROM vals WHERE val = :val');
            $cibleCSV->bindValue(':val', round($tab[$i+1][4], 2), PDO::PARAM_STR);
            $cibleCSV->execute();
            $resultHappyScore = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        }

        /* health score */
        if (isset($tab[$i+1][7])) {
            $cibleCSV = $db->prepare('SELECT id_val FROM vals WHERE val = :val');
            $cibleCSV->bindValue(':val', round($tab[$i+1][7], 2), PDO::PARAM_STR);
            $cibleCSV->execute();
            $resultHealthScore = $cibleCSV->fetch(PDO::FETCH_ASSOC);
        }
        
        $query_name_country = $db->prepare('INSERT INTO country_has_years (country_id, years_id, happiness_rank, happiness_score, health_score) 
                                            VALUES (:country_id, :years_id, :happiness_rank, :happiness_score, :health_score)');
        $query_name_country->bindValue(':country_id', $resultCountry["id_country"], PDO::PARAM_INT);
        $query_name_country->bindValue(':years_id', $resultYear["id_years"], PDO::PARAM_INT);
        $query_name_country->bindValue(':happiness_rank', $resultHappyRank["id_val"], PDO::PARAM_INT);
        $query_name_country->bindValue(':happiness_score', $resultHappyScore["id_val"], PDO::PARAM_INT);
        $query_name_country->bindValue(':health_score', $resultHealthScore["id_val"], PDO::PARAM_INT);
        $query_name_country->execute();
    }
}

function unique($array, $var){
    $tab = [];
    $res = "";
    for ($i=1; $i < count($array); $i++) { 
        array_push($tab, $array[$i][$var]);
        $res = array_values(array_unique($tab));  
    }
    return $res; 
}