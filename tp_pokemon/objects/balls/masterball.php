<?php
    
    class Masterball extends Ball
    {
        public function __construct ()
        {
            $name = 'Masterball';
            $level = 100;

            parent::__construct($name, $level);
        }

    }
?>