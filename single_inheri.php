<?php
class Cat {
    public $weight;
    public $maxspeed;

    public function eat($weight, $maxspeed) {
        $this->weight = $weight;
        $this->maxspeed = $maxspeed;
        echo "Eating<br>";
    }

    public function sleep() {
        echo "Sleeping<br>";
    }
}

class Lion extends Cat {
    public $manelength;

    public function roar() {
        echo "Roarrrrrrr<br>";
        echo "Weight: " . $this->weight . "<br>";
        echo "Max speed: " . $this->maxspeed . "<br>";
        echo "Mane length: " . $this->manelength . "<br>";
    }
}

$objLion = new Lion();
$objLion->eat(200, 50);
$objLion->manelength = 36;
$objLion->roar();
$objLion->sleep();
?>
