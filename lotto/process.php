<?php
require 'db_connect.php';
require 'Lotto.php';
$userNumbers = $_POST['userNumbers']; // Tablica liczb użytkownika
$randomNumbers = [];

// Generowanie 6 unikalnych liczb losowych
while (count($randomNumbers) < 6) {
    $number = rand(1, 49);
    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    }
}
if (count($userNumbers) !== count(array_unique($userNumbers))) {
    echo "Liczby muszą być unikalne!";
    exit();
}

echo "Twoje liczby: " . implode(", ", $userNumbers) . "<br>";
echo "Wylosowane liczby: " . implode(", ", $randomNumbers) . "<br>";
$matches = array_intersect($userNumbers, $randomNumbers);
$numberOfMatches = count($matches);

echo "Trafiłeś " . $numberOfMatches . " liczb(y): " . implode(", ", $matches) . "<br>";

if ($numberOfMatches == 6) {
    echo "6 liczb Wygrałeś 1 000 000";
} elseif ($numberOfMatches == 5) {
    echo "Pięć to też w porządku gratulacje! Wygrałeś 50 000";
} elseif ($numberOfMatches >= 3) {
    echo "No cóż troche mniej ale zawsze coś nie? Wygrałeś 500";
} else {
    echo "99% Gamblers quit before big win";
}




function generateRandomNumbers($min, $max, $quantity) {
    $numbers = [];
    while (count($numbers) < $quantity) {
        $number = rand($min, $max);
        if (!in_array($number, $numbers)) {
            $numbers[] = $number;
        }
    }
    return $numbers;
}

function checkMatches($userNumbers, $randomNumbers) {
    return array_intersect($userNumbers, $randomNumbers);
}
$randomNumbers = generateRandomNumbers(1, 49, 6);
$matches = checkMatches($userNumbers, $randomNumbers);
$numberOfMatches = count($matches);

// Konwertuj tablice liczb na ciągi znaków
$userNumbersStr = implode(", ", $userNumbers);
$randomNumbersStr = implode(", ", $randomNumbers);
$matchesCount = $numberOfMatches;

// Przygotuj zapytanie SQL
$sql = "INSERT INTO results (user_numbers, random_numbers, matches) VALUES (:user_numbers, :random_numbers, :matches)";

// Przygotuj zapytanie do wykonania
$stmt = $pdo->prepare($sql);

// Powiąż parametry
$stmt->bindParam(':user_numbers', $userNumbersStr);
$stmt->bindParam(':random_numbers', $randomNumbersStr);
$stmt->bindParam(':matches', $matchesCount);

// Wykonaj zapytanie
$stmt->execute();

// Utwórz obiekt Lotto
$lotto = new Lotto();

// Wygeneruj losowe liczby
$randomNumbers = $lotto->generateNumbers();

// Sprawdź trafienia
$matches = $lotto->checkMatches($userNumbers, $randomNumbers);
$numberOfMatches = count($matches);
// Sprawdź, czy liczby są unikalne


?>


