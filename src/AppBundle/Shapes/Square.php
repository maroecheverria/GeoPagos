<?php

namespace AppBundle\Shapes;

/**
* Square shape class
*/
class Square extends Shape implements iShape
{

    function __construct($base, $height)
    {
        parent::__construct('Square', $base, $height, null);
    }

    public function getArea(){
        return pow($this->getBase(), 2);
    }
}
