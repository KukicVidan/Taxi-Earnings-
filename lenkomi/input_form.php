<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KUKI TAXI!</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <h1>KUKI TAXI!</h1>
    <form action="submit_form.php" method="post">
        <label for="date">Datum:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="location_from">Od:</label>
        <input type="text" id="location_from" name="location_from" required><br><br>

        <label for="location_to">Do:</label>
        <input type="text" id="location_to" name="location_to" required><br><br>

        <label for="amount">Naplata(BAM):</label>
        <input type="text" id="amount" name="amount" required pattern="\d+(\.\d{2})?"><br><br>

        <label for="client_name">Ime:</label>
        <input type="text" id="client_name" name="client_name" required><br><br>

        <input type="submit" value="Potvrdi">
    </form>
    <br>
    
    <br>
    <a href="rezultati_page.php" class="btn">Pogledaj svu zaradu!</a>
</body>
</html>
