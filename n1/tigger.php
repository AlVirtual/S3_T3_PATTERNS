
<?php

//Definiu el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
//Imprimeix en pantalla múltiples vegades el rugit de Tigger.
//Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.


class Tigger {
        private static $winnie;
        private $counter;

        private function __construct(){
                echo "Building character..."."<br>" . PHP_EOL;
        }

        public function roar(){
                echo "Grrr!" . PHP_EOL;
                ++$this->counter;
                    
        }

        public static function getInstance(){
                if (self::$winnie instanceof Tigger){
                        return self::$winnie;
                }else{
                        return self::$winnie = new Tigger();
                }
        }

        public function getCounter(){
                return $this->counter;
        }

}

Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();

echo "<br>";
echo 'El osito ha rugido '.Tigger::getInstance()->getCounter()." veces";

?>