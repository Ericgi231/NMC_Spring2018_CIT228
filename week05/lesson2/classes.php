<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
    <style>
        body{
            background-color:#ffffe5;
        }
    </style>
</head>
<body>
<?php
    class Cat 
    {
        public $breed;
        public $age;
        public $color;

        public function __construct($breed,$age,$color){
            $this->breed = $breed;
            $this->age = $age;
            $this->color = $color;
        }

        public function BaseInfo(){
            return "<h1>Cat Info</h1>We have a ".$this->breed." cat.<br>They are ".$this->age." years old.<br> Their fur is ".$this->color."<br><br>";
        }
    }

    class Pet Extends Cat
    {
        public $name;
        public $personality;
        public $faveFood;
        public $trained;

        public function __construct($name,$personality,$faveFood,$trained){
            $this->name = $name;
            $this->personality = $personality;
            $this->faveFood = $faveFood;
            $this->trained = $trained;
        }

        public function PetInfo(){
            if ($this->trained) {
                $s = "They are trained to use the litter box.<br>";
            } else {
                $s = "They have not been trained to use the litter box yet.<br>";                
            }
            return "<h1>Pet Info</h1>Their name is ".$this->name.".<br>They are very ".$this->personality.".<br>Their favorite food is ".$this->faveFood.".<br>".$s."<br>";
        }
    }
    
    $cat = new Cat("Ragdoll",3,"White");
    $pet = new Pet("Bort","spicy","Meat Balls",true);

    printf($cat->BaseInfo());
    printf($pet->PetInfo());
?>
</body>
</html>