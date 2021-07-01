<?php

//Написать структуру из двух классов, где один наследует другой. 
//Тема  животное-кошка
//Дописать третий класс животные-млекопитающее-кошка.
//Предусмотреть в структуре классов применение инкапсуляции, почитать про геттеры и сеттеры и применить их на практике.

class Animal {

        protected $kind, $age, $gender;

        public function set_kind($set_kind_value) {
            $this->kind = $set_kind_value;
        }

        public function get_kind() {
            return $this->get_kind ? $this->get_kind : "unknown animal kind";
        }

        public function set_age($set_age_value) {
            $this->set_age = $set_age_value;
        }

        public function get_age() {
            return $this->get_age ? $this->get_age : "unknown age";
        }

        public function set_gender($set_gender_value) {
            $this->set_gender = $set_gender_value;
        }

        public function get_gender() {
            return $this->get_gender ? $this->get_gender : "unknown gender";
        }

        function get_info(){
            return "kind:" . ' ' . $this->kind . ' ' . "age:" . " " . $this->age .' ' . "gender:" . ' ' . $this->gender;
        }

}

class Mammal extends Animal {

        protected $animal_type;

        public function set_animal_type($animal_type_value) {
            $this->animal_type = $animal_type_value;
        }

        public function get_animal_type() {
            return $this->animal_type ? $this->animal_type : " unknown type";
        }

        public function get_info() {
            return parent::get_info() . ' ' . "animal type:" . ' ' . $this->get_animal_type() . "\n";
        }
}

class Cat extends Mammal {

        protected $cat_breed;
        protected $name;

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

        public function get_info() {
            return parent::get_info() . " breed: " . $this->get_breed() . " " . "name:" . " "  . $this->get_name(). "\n";
        }

}

$my_cat = new Cat();
$my_cat->set_breed("british");
$my_cat->set_name("Murka");
$my_cat->set_age(5);
$my_cat->set_gender("female");
$my_cat->set_kind("cat");
$my_cat->set_animal_type("mammal");

echo $my_cat->get_info();




