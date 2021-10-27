<?php

class  Shop  {
    
    public $purchase;

    public function buyItem($item) {
        $this->purchase = $item;
        
        echo $this->name ." bought " . $this->purchase[0] . " , " . $this->purchase[1] . " and " . $this->purchase[2] ; 
    }

    public function insideHQ($item) {
        $this->storage = $item;
        
        echo $this->name ." receives " . $this->storage[0] . " , " . $this->storage[1] . " and " . $this->storage[2] ." from HQ through errand boy"; 
    }
}

class Person extends Shop  {
    public $name;

    public function __construct($newName) {
        $this->name = $newName;
    }



    
}







$person1 = new Person('Kevin');
$person1->buyItem(['soap','chicken','phone']);

echo "<br>";

$person2 = new Person('Fikri');
$person2->buyItem(['duck','chicken','popcorn']);

echo "<br>";

$person3 = new Person('Arjun');
$person3->insideHQ(['paper','ruler','pencil']);

?>