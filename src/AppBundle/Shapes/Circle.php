<?php

namespace AppBundle\Shapes;

/**
* Circle shape class
*/
class Circle extends Shape implements iShape
{

    function __construct($diameter)
    {
        parent::__construct('Circle', null, null, $diameter);
    }

    public function getArea(){
        $ratio = $this->getDiameter() / 2;
        return 3.14 * pow($ratio, 2);
    }
}
