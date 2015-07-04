<?php

class Character
{
    public $name;
    public $atk;
    public $rank;

    public function __construct($name, $atk)
    {
        $this->name = $name;
        $this->atk = $atk;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function getRank()
    {
        return $this->rank;
    }
}

class WarriorCharacter extends Character
{
    public $rank="Warior";
}

class BishopCharacter
{
    public $rank = "Bishop";
}

class CharacterBuilder
{
    public $character;
    public function register($name, $atk, $rank)
    {
        $this->character = CharacterFactory::create($name, $atk, $rank);
    }

    public function getCharacter()
    {
        return $this->character;
    }
}

class CharacterFactory
{
    public static function create($name, $atk, $rank)
    {
        $rankClass = $rank. "Character";
        if (class_exists($rankClass)) {
            return new $rankClass($name, $atk);
        } else {
            die("Class is not exist");
        }
    }
}

//$warior = new WarriorCharacter('Jackie', '99');
$character = new CharacterBuilder();
$character->register('Jackie', '90', 'Warrior');

echo "Name : " . $character->getCharacter()->getName();
echo "<br/> ATK : " . $character->getCharacter()->getAtk();
echo "<br/> Rank : " . $character->getCharacter()->getRank();

