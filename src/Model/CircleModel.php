<?php 
namespace App\Model;

use App\Model\GeometricModel;


class CircleModel extends GeometricModel
{
    public float $radius;

    public function __construct($radius)
    {
        $this->setType('circle');
        $this->radius = $radius;
    }


    //calculate surface
    public function calculateSurface()
    {
        $this->setSurface(pi() * pow($this->radius, 2));
    }

    //calculate circumference
    public function calculateCircumference()
    {
        $this->setCircumference(2 * $this->radius * pi());
    }

    //get response
    public function getResponseModel()
    {
        return [
            'type' => $this->getType(),
            'radius' => $this->radius,
            'surface'=> $this->getSurface(),
            'circumference' => $this->getCircumference()
        ];
    }

}