<?php
    
    abstract class Pokemon 
    {
    	private $name;
        private $maxLife;
        private $life;
    	private $level;
    	private $type;
        private $strength;
        private $isCaptured;

    	public function __construct ($name, $maxLife, $level, $type, $strength, $isCaptured)
    	{
    		$this->name = $name;
            $this->maxLife = $maxLife;
            $this->life = $maxLife;
    		$this->level = $level;
    		$this->type = $type;
            $this->strength = $strength;
            $this->isCaptured = $isCaptured;

            static::sayHi();
        }

        public function getName ()
        {
            $Name = $this->name;
            return $Name;
        }

        public function getMaxLife ()
        {
            $MaxLife = $this->maxLife;
            return $MaxLife;
        }

        public function setLife ($Life)
        {
            $this->life = $Life;
            return $Life;
        }

        public function getLife ()
        {
            $Life = $this->life;
            return $Life;
        }

        public function getLevel ()
        {
            $Level = $this->level;
            return $Level;
        }
        
        public function level_up ()
        {
            $this->level += 1;
            $this->maxLife += 5;
            $this->strength += 2;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level . '.' . "\nIl gagne 5 pts de vie et 2 pts de force.\n";

            echo $level_up_text;
            return true;
        }

        public function attack ($Pokemon)
        {
            if ($Pokemon->getLife() == 0)
            {
                echo $this->name .' ne peut pas attaquer ' . $Pokemon->getName() . ' car il est déja KO ! <br>';
            }
            elseif ($this->getLife() == 0)
            {
                echo $this->name . " n'est plus en état de se battre <br>";
            }
            else
            {
                $damage = ceil($this->strength * (rand(900, 1100)/1000));
                echo $this->name . ' attaque ' . $Pokemon->getName() . ' ! <br>' ;
                $Pokemon->takeDamage($damage);
            }

            return true;
        }

        public function takeDamage ($damage)
        {
            $newLife = $this->life -= $damage;

            if ($this->life == 0)
            {
                echo $this->name . ' est déja KO ! <br>' ;
            }

            elseif ($newLife <= 0)
            {
                $this->life = 0;
                echo $this->name . ' est KO ! <br>' ;
            }
            else
            {
                $takeDamageText = $this->name . ' à reçu ' . $damage . ' points de dégats ! Il lui reste ' . $this->life . ' points de vie ! <br>';
                echo $takeDamageText;
            }

            return true;
        }

        public function capture ($bool)
        {
            $this->isCaptured = $bool;
        }

        public function getCapture ()
        {
            $isCaptured = $this->isCaptured;
            return $isCaptured;
        }

        public static function sayHi ()
        {
            echo 'Hi <br>';
        }
    }

?>