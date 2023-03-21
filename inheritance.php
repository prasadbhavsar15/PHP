<?php
    class cat
    {
        public $weight;
        public $maxspeed;
        function eat()
        {
            echo"Eating <br>";
        }
        function sleep()
        {
            echo "sleeping <br>";
        }
    }
    class Lion extends cat{
        public $manelenght;
        function roar()
        {
            echo "Roarrrrrrr<br>";
        }
    }
$objLion= new Lion();
$objLion->weight;
$objLion->manelenght;
$objLion->eat();
$objLion->roar();
$objLion->sleep();
?>