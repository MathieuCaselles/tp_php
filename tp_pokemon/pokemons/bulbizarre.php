<?php
    
    class Bulbizarre extends Pokemon
    {
        public function __construct ($level, $isCaptured)
        {
            $name = 'Bulbizarre';
            $max_life = 88 + 6 * $level;
            $type = 'plante';
            $strength = 1 + 2 * $level;

            parent::__construct($name, $max_life, $level, $type, $strength, $isCaptured);
        }

        public static function sayHi ()
        {
            echo "Buuuuulbizarre ! <br>";
        }
    }
?>