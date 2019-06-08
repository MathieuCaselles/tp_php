<?php
    
    class Superpotion extends AllPotions
    {
        public function __construct ()
        {
            $name = 'Superpotion';
            $heal = 50;

            parent::__construct($name, $heal);
        }

    }
?>