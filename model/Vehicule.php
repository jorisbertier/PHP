<?php


class Vehicule {

    //private
    //public
    //protected
    private string $color;
    private int $wheelNb;

    public function __construct(string $newColor, int $newWheelNb) {
        $this->color = $newColor;
        $this->wheelNb = $newWheelNb;
    }

    public function getColor() : string {
        return $this->color;
    }

    public function setColor($newColor) : void {
        $this->color = $newColor;
    }

    
    public function getWheelNb() : int {
        return $this->wheelNb;
    }

    public function setWheelNb(int $wheelNb) : void {
        $this->wheelNb = $wheelNb;
    }

}


class Personnage {

    private string $name;
    private int $hpMax = 300;
    private int $hp = 300;
    private int $age;
    private int $strength = 25;

    public function __construct(string $newName, int $newAge) {
        $this->name = $newName;
        $this->age = $newAge;
    }


    public function getHpMax() : int {
        return $this->hpMax;
    }

    public function setHpMax($newHpMax) : void {
        $this->hpMax = $newHpMax;
    }


    public function getHp() : int{
        return $this->hp;
    }

    public function setHp($newHp) : void {
        $this->hp = $newHp;
    }


    public function getStrength() : int {
        return $this->strength;
    }

    public function setStrength($newStrength) : void {
        $this->strength = $newStrength;
    }

    public function getInfo() {
        return $this->name." : ".$this->hp."/".$this->hpMax;
    }

    public function frapper(Personnage $personnage) {
        $attack = $this->strength * rand(1,4);
        $personnage->setHp($personnage->getHp() - $attack);

        if($personnage->getHp() < 0){
            $personnage->setHp(0);
        }
        echo $personnage->name . ' a subit ' . $attack . ', il lui reste ' . $personnage->getHp(). "<br>";
    }

}
?>