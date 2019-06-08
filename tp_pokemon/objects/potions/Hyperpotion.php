<?php
    
    class Hyperpotion extends AllPotions
    {
        public function __construct ()
        {
            $name = 'Hyperpotion';
            $heal = 200;

            parent::__construct($name, $heal);
        }

    }
?>