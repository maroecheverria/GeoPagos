<?php

namespace AppBundle\Shapes;


interface iShape{

    public function getType();
    public function getBase();
    public function getArea();
    public function getHeight();
    public function getDiameter();

}
