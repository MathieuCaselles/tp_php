<?php
    
    class Superball extends Ball
    {
        public function __construct ()
        {
            $name = 'Superball';
            $level = 30;

            parent::__construct($name, $level);
        }

    }
?>