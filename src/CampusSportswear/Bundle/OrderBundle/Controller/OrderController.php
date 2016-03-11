<?php

namespace CampusSportswear\Bundle\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OrderController extends Controller
{
    public function indexAction()
    {
        $logger = $this->get('logger');
        $logger->info(array('gridName' => 'order-grid'));
        $logger->crit(array('gridName' => 'order-grid'));
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    public function viewAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    public function updateAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    public function deleteAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }
}
