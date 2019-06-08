<?php 

    abstract class Ball implements Objects
    {
    	private $name;
    	private $level;

    	public function __construct ($name, $level)
    	{
    		$this->name = $name;
    		$this->level = $level;
        }

        function __destruct() {
        }

        public function getName ()
        {
            $Name = $this->name;
            return $Name;
        }
        
        public function use ($Pokemon)
        {
            if ($Pokemon->getCapture())
            {
                echo "Vous ne pouvez pas capturer un pokémon déja capturé ! <br>";
            }
            elseif ($Pokemon->getLife() == 0)
            {
                echo "Vous ne pouvez pas capturer un pokémon qui est KO ! <br>";
            }
            else
            {
                echo "Envoie d'une " . $this->name . ' sur ' . $Pokemon->getName() . ' !';
                echo '<br>';

                if ($this->level != 100)
                {
                    $tauxCapture = round((($Pokemon->getMaxLife() - $Pokemon->getLife()) / $Pokemon->getMaxLife() ) * (1 + ($this->level - $Pokemon->getLevel()) / 25), 2);
                    $testCapture = rand(0, 100) / 100;
                    
                    if ($tauxCapture > $testCapture)
                    {
                        echo 'Super ! ' . $Pokemon->getName() . ' a été capturé ! <br>';
                        $Pokemon->capture(true);
                        $this->__destruct();
                    }
                    else
                    {
                        echo 'Mince ! ' . $Pokemon->getName() . " s'est libéré ! <br>" ;
                        $this->__destruct();
                    }
                }
                else
                {
                    echo 'gesgsSuper ! ' . $Pokemon->getName() . ' a été capturé ! <br>';
                    $Pokemon->capture(true);
                    $this->__destruct();
                }
            }

            return true;

        }

    }
    
?>