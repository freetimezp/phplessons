<?php

class Grandpa {

    public $body = 'нормальное';

    private $borsh = 'yummy';

    public function eat($callories) {
        if($callories > 500) {
            $this->body = 'толстый';
        }else{
            $this->body = 'худой';
        }
    }

    protected function getBorsh() {
        return $this->borsh;
    }
}

class Father extends Grandpa {
    protected $hair = 'русые';
    public function recolor($color) {
        $this->hair = $color;
        echo $this->hair;
    }
}

$masha = new Father();

$masha->recolor('white');




