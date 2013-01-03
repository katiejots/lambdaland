<?php

class Dog {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __get($key) {
        if (property_exists($this, $key)) {
            return $this->{$key};
        } else {
        throw new \RuntimeException('This object is immutable');
        }
    }

    public function __set($key, $value) {
        throw new \RuntimeException('This object is immutable');
    }
}


$billy = new Dog('Billy');
var_dump($billy->name);
$billy->name = 'Buster';
?>