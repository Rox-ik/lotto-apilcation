<!DOCTYPE html>
<html>
<head>
    <title>Symulator Lotto</title>
</head>
<body>

    <form action="process.php" method="post">
    <label>Wybierz 6 liczb (1-49):</label><br>
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <input type="number" name="userNumbers[]" min="1" max="49" required><br>
    <?php endfor; ?>
    <input type="submit" value="Zagraj">
</form>
<p><a href="results.php">Zobacz historię gier</a></p>

<script src="script.js"></script>
<div id="result"></div>
<div id="loader" style="display:none;">Ładowanie...</div>
</body>
</html>
