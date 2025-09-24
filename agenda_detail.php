<?php

require 'config.php';


$ID = $_GET['ID'];

echo "ID van het agenda-item is: " . $ID . "<br>";

try {


    $query = "SELECT * FROM games WHERE ID = :ID";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();


    $resultaten = $stmt->fetchAll();


    $aantalRijen = count($resultaten);

    include 'views/agenda_detail_view.php';

} catch (PDOException $e) {
    echo '<p>Fout!</p>';
    echo '<p>Fout!: ' .$query . '</p>';
    echo '<p>Fout!</p>' . $e->getMessage() . '</p>';
    exit;
}