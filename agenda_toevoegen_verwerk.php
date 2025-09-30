<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $ReleaseDate = $_POST['ReleaseDate'];
    $Price = $_POST['Price'];
    $Categories = $_POST['Categories'];

    try {
        $query = "INSERT INTO games (Name, ReleaseDate, Price, Categories)
                  VALUES (:Name, :ReleaseDate, :Price, :Categories)";

        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'Name' => $Name,
            'ReleaseDate' => $ReleaseDate,
            'Price' => $Price,
            'Categories' => $Categories
        ]);

        if ($stmt->rowCount() > 0) {
            $resultaat = "{$Name} is toegevoegd.";
        } else {
            $resultaat = "Er is een fout opgetreden tijdens het toevoegen van de game.";
        }

    } catch (PDOException $e) {
        $resultaat = "Er is een fout opgetreden: " . $e->getMessage();
    }

} else {
    $resultaat = "Het formulier is niet geldig.";
}

include 'views/agenda_toevoegen_verwerk_view.php';
echo "<a href='agenda.php'>Terug naar home</a>";
?>
