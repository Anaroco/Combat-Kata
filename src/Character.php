<?php

namespace App;

class Character {

    //properties
    
    private $health;
    private $level;
    private $alive;

    //constructor

    public function __construct(){
        $this->health = 1000;
        $this->level = 1;
        $this->alive = true;

    }

    // Getter and Setter

    public function getHealth(){
        return $this->health;
    }
    public function getLevel(){
        return $this->level;
    }

    public function getAlive(){
        return $this->alive;
    }
  

    //methods

    public function deal_damage($character, $damage){
        $character->health = $character->health - $damage;
    
        if ($character->health < 1){
            $character->alive=false;
        }
    }
}

?>