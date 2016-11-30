<?php

namespace AppBundle\Shapes;

class ShapeFactory{

    public function Create($type = null, $base = null, $height = null, $diameter = null){

        switch ($type) {
            case 'Circle':
                return new Circle($diameter);
                break;
            case 'Square':
                return new Square($base, $height);
                break;
            case 'Triangle':
                return new Triangle($base, $height);
                break;
            default:
                throw new \Exception("Invalid Type");
                break;
        }

    }

}
