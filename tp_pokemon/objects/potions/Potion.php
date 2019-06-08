<?php
    
    class Potion extends AllPotions
    {
        public function __construct ()
        {
            $name = 'Potion';
            $heal = 20;

            parent::__construct($name, $heal);
        }

    }
?>