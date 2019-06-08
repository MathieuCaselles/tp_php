<?php    
    class Salameche extends Pokemon
    {
        public function __construct ($level, $isCaptured)
        {
            $name = 'Salamèche';
            $max_life = 60 + 4 * $level;
            $type = 'feu';
            $strength = 0 + 2  * $level;

            parent::__construct($name, $max_life, $level, $type, $strength, $isCaptured);
        }

        public static function sayHi ()
        {
            echo "Salamèèèèèche ! <br>";
        }
    }
?>