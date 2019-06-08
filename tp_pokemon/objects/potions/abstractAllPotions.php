<?php 

    abstract class AllPotions implements Objects
    {
        private $name;
        private $heal;
        
        public function __construct ($name, $heal)
    	{
    		$this->name = $name;
    		$this->heal = $heal;
        }

        public function use ($Pokemon)
        {
            if ($Pokemon->getLife() == 0)
            {
                echo 'Vous ne pouvez pas soigner ' . $Pokemon->getName() . ' car il est déja KO ! <br>';
            }
            else
            {
                $maxLife = $Pokemon->getMaxLife();
                $newLife = $Pokemon->getLife() + $this->heal;
    
                echo "Utilisation d'une " . $this->name . ' ! <br>';
    
                if ($this->name == 'Potionmax')
                {
                    $Pokemon->setLife($maxLife);
                    echo $Pokemon->getName() . ' récupère toute sa vie ! <br>';
                }
                else
                {
    
                    if ($newLife >= $Pokemon->getMaxLife())
                    {
                        $Pokemon->setLife($maxLife);
                        echo $Pokemon->getName() . ' récupère toute sa vie ! <br>';
                    }
                    else
                    {
                        $Pokemon->setLife($newLife);
                        echo $Pokemon->getName() . ' récupère ' . $this->heal . ' points de vie ! <br>';
                    }
                }
            }
            
        }

        function __destruct(){
        }
    }
    
?>