<?php
class Lotto {
    private $min;
    private $max;
    private $quantity;

    public function __construct($min = 1, $max = 49, $quantity = 6) {
        $this->min = $min;
        $this->max = $max;
        $this->quantity = $quantity;
    }

    public function generateNumbers() {
        $numbers = [];
        while (count($numbers) < $this->quantity) {
            $number = rand($this->min, $this->max);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }
        return $numbers;
    }

    public function calculatePrize($numberOfMatches) {
        switch ($numberOfMatches) {
            case 6:
                return "WYGRAŁEŚ MILION?!";
            case 5:
                return "25 000 jesteś na plus czas to chyba obstawić?";
            case 4:
                return "5000 graj do końca";
            case 3:
                return "500 ważne że na plus nie?";
            default:
                return "99% gamblers quit before big win!";
        }
    }
    
    public function checkMatches($userNumbers, $randomNumbers) {
        return array_intersect($userNumbers, $randomNumbers);
    }
}



?>
