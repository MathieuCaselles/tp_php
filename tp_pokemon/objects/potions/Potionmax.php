<?php
    
    class Potionmax extends AllPotions
    {
        public function __construct ()
        {
            $name = 'Potionmax';
            $heal = 999;

            parent::__construct($name, $heal);
        }

    }
?>