<?php

namespace CampusSportswear\Bundle\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig');
    }
}
