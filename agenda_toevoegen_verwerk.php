<?php

require 'config.php';
try {
    $query = "INSERT INTO games (Name, ReleaseDate, Price, Categories)
    VALUES  (:Name, :ReleaseDate, :Price, :Categories)";

        $stmt = $pdo->prepare($query);

    $stmt->execute([
        'Name' => 'Name',
        'ReleaseDate' => 'ReleaseDate',
        'Price' => 'Price',
        'Categories' => 'Categories'
    ]);

    if ($stmt->rowCount()) {
        echo "het item is toegevoegd";
    } else {
        echo "Fout bij het toevoegen!";
    }
} catch (PDOException $e) {
    echo "Fout bij toevoegen!<br>";
    echo $e->getMessage();
}


echo "<a href='agenda.php'>Terug naar home</a>";