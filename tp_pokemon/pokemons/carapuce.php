<?php
    
    class Carapuce extends Pokemon
    {
        public function __construct ($level, $isCaptured)
        {
            $name = 'Carapuce';
            $max_life = 60 + 5 * $level;
            $type = 'eau';
            $strength = 4 + 1 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength, $isCaptured);
        }

        public static function sayHi ()
        {
            echo "Carapuuuce ! <br>";
        }
    }
?>