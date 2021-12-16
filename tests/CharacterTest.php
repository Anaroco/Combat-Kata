<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase
 
{

	public function test_character_creation()
	{

		//Given
		$simon = new Character();

		//when
		$health = $simon->getHealth();
		$level = $simon->getLevel();
		$alive = $simon->getAlive();

		//Then
		$this->assertEquals(1000, $health);
		$this->assertEquals(1, $level);
		$this->assertEquals(true, $alive);

	}

	public function test_deal_damage(){
		//Given
		$marta = new Character();
		$cristina = new Character();
		$damage =600;
		$resultExpected =1000 -$damage;

		//When
		$marta->deal_damage($cristina, $damage);

		//Then
		$this->assertEquals($resultExpected, $cristina-> getHealth());
	}
	
	
	
	public function test_character_die(){
		
		//given
		$pepe = new Character();
		$ramon = new Character();
		$alive = false;
        $damage = 1200;
		$resultExpected = 1000 - $damage;

		//when
		$pepe->deal_damage($ramon, $damage);

		//then
		$this->assertEquals(false, $ramon->getAlive());
		$this->assertEquals($resultExpected,$ramon->getHealth());

		
		
		
		




	}
}