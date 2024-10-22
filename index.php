<?php
class SportsCar {
    public $brand;
    public $model;
    public $topSpeed;

    public function __construct($brand, $model, $topSpeed) {
        $this->brand = $brand;
        $this->model = $model;
        $this->topSpeed = $topSpeed;
    }

    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Top Speed: " . $this->topSpeed . " km/h<br>";
    }

    public function accelerate() {
        echo $this->model . " is accelerating at full speed!<br>";
    }
}

class LuxuryCar extends SportsCar {
    public $interiorMaterial;
    public $hasMassageSeats;

    // Constructor for LuxuryCar
    public function __construct($brand, $model, $topSpeed, $interiorMaterial, $hasMassageSeats) {
        parent::__construct($brand, $model, $topSpeed);
        $this->interiorMaterial = $interiorMaterial;
        $this->hasMassageSeats = $hasMassageSeats;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Interior Material: " . $this->interiorMaterial . "<br>";
        echo "Massage Seats: " . ($this->hasMassageSeats ? "Yes" : "No") . "<br>";
    }

    public function activateMassageSeats() {
        if ($this->hasMassageSeats) {
            echo "Activating massage seats in " . $this->model . ". Enjoy your ride!<br>";
        } else {
            echo $this->model . " does not have massage seats.<br>";
        }
    }
}

// Create an instance of LuxuryCar
$luxuryCar = new LuxuryCar("Mercedes", "S-Class", 250, "Leather", true);

echo "<strong>Luxury Car Info:</strong><br>";
$luxuryCar->displayInfo();    
$luxuryCar->accelerate();     
$luxuryCar->activateMassageSeats();
?>
