<?php

namespace App\Model;

use App\Model\GeometricModel;

class TriangleModel extends GeometricModel
{
    public float $a;
    public float $b;
    public float $c;


    //construct
    public function __construct($a, $b, $c)
    {
        $this->setType('triangle');
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    //calculate surface
    public function calculateSurface()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        $this->setSurface(sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)));
    }

    //calculate circumference
    public function calculateCircumference()
    {
        $this->setCircumference($this->a + $this->b + $this->c);
    }

    //get response
    public function getResponseModel()
    {
        return [
            'type' => $this->getType(),
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'surface'=> $this->getSurface(),
            'circumference' => $this->getCircumference()
        ];
    }
    

}
