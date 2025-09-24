<?php
require 'config.php';
try {


    $query = "SELECT * FROM games";
    $stmt = $pdo->prepare($query);
    $stmt->execute();


    $resultaten = $stmt->fetchAll();


    $aantalRijen = count($resultaten);

    include 'views/agenda_view.php';

} catch (PDOException $e) {
    echo '<p>Fout!</p>';
    echo '<p>Fout!: ' .$query . '</p>';
    echo '<p>Fout!</p>' . $e->getMessage() . '</p>';
    exit;
}

