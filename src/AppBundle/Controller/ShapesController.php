<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ShapesController extends Controller
{
    /**
     * @Route("/shapes", name="shapes")
     */
    public function indexAction(Request $request)
    {

        $html = '';
        $circle = $this->get('app.ShapeFactory')->Create('Circle', null, null, 10);
        $square = $this->get('app.ShapeFactory')->Create('Square', 10, 10, null);
        $triangle = $this->get('app.ShapeFactory')->Create('Triangle', 15, 10, null);

        return $this->render('shapes/index.html.twig', array(
                                                            'circle' => $circle,
                                                            'square' => $square,
                                                            'triangle' => $triangle
                                                            )
                            );
    }
}
