<link rel="stylesheet" href="/Program2/css/style.css">
<h1>Games</h1>
<?php
if ($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
            <a href="agenda_detail_view.php?ID=<?=$rij['ID']?>">Details</a>
        <li>
            <strong>naam:</strong><?= $rij['Name'] ?><br>
            <strong>ReleaseDatum:</strong><?= $rij['ReleaseDate'] ?><br>
            <strong>prijs:</strong><?= $rij['Price'] ?><br>
            <strong>categoriën</strong><?= $rij['Categories'] ?><br>

            <a href="#"></a>
            <a href="#"></a>
        </li>
        <hr>
       <?php } ?>
    </ul>
<?php } else { ?>
    <p>Geen resultaten gevonden</p>
<?php } ?>