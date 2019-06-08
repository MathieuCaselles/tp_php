<?php
    
    class Pokeball extends Ball
    {
        public function __construct ()
        {
            $name = 'Pokéball';
            $level = 10;

            parent::__construct($name, $level);
        }

    }
?>