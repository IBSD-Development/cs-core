<?php

namespace CampusSportswear\Bundle\OrderBundle\Controller;

use CampusSportswear\Bundle\OrderBundle\Entity\CampusSportswearOrder;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OrderController extends Controller
{
    public function indexAction()
    {
        $logger = $this->get('logger');
        $logger->info(array('gridName' => 'order-grid'));
        $logger->crit(array('gridName' => 'order-grid'));
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    /**
     * @param CampusSportswearOrder $order
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template("CampusSportswearOrderBundle:Default:view.html.twig")
     */
    public function viewAction( CampusSportswearOrder $order)
    {
        $logger = $this->get('logger');
        $logger->info($order->getId());
        $logger->crit($order->getId());
        return array('order' => $order);
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
