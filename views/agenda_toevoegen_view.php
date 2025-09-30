<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nieuw agenda Item toevoegen</h1>

    <form action="../agenda_toevoegen_verwerk.php" method="POST">

        <label for="Name">Naam</label>
        <input type="text" id="Name" name="Name" required>
        <br><br>

        <label for="ReleaseDate">ReleaseDate</label>
        <input type="date" id="ReleaseDate" name="ReleaseDate" required>
        <br><br>

        <label for="Price">prijs</label>
        <input type="text" id="Price" name="Price" required>
        <br><br>

        <label for="Categories">categories</label>
        <input type="text" id="Categories" name="Categories" required>
        <br><br>

        <button type="submit">verstuur</button>
    </form>
</body>
</html>