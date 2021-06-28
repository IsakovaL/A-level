<?php

//Написать структуру из двух классов, где один наследует другой. 
//Тема  животное-кошка

class Animal {

	public $age, $kind, $gender;

	function get_info(){
		return "age:" . " " . $this->age .' ' . "kind:" . ' ' . $this->kind . ' ' . "gender:" . ' ' . $this->gender;
	}

}

class Cat extends Animal {

    public $cat_breed;
    public $name;

    public function set_breed($cat_breed_value){
		$this->cat_breed = $cat_breed_value;
	}

    public function get_breed(){
		
		return $this->cat_breed ? $this->cat_breed :  " unknown breed";
	}
    
    public function set_name($name_value) {
        $this->name = $name_value;
    }

    public function get_name() {
        return $this->name ? $this->name :  " unknown name";
    }

	public function get_info(){
		return parent::get_info() . " breed: " . $this->get_breed() . " " . "name:" . $this->get_name(). "\n";
	}

}

$my_cat = new Cat();
$my_cat->set_breed("british");
$my_cat->name = "Murka";
$my_cat->age = 5;
$my_cat->gender = "female";
$my_cat-> kind = "cat";
echo $my_cat->get_info();