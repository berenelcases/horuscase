<?php
namespace App\Model;


class GeometricModel{

    private string $type;
    private float $surface;
    private float $circumference;

    public function setType(string $type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function setSurface(float $surface){
        $this->surface = $surface;
    }

    public function getSurface(){
        return floor($this->surface * 100) / 100;
    }

    public function setCircumference(float $circumference){
        $this->circumference = $circumference;
    }

    public function getCircumference(){
        return floor($this->circumference * 100) / 100;
    }

}