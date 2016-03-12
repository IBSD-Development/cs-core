<?php

namespace CampusSportswear\Bundle\OrderBundle\Controller;

use CampusSportswear\Bundle\OrderBundle\Entity\CampusSportswearOrder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OrderController extends Controller
{
    public function indexAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    /**
     * @Template("CampusSportswearOrderBundle:Default:update.html.twig")
     */
    public function createAction(Request $request)
    {
        $order = new CampusSportswearOrder();
        $order->setCreatedAt(new \DateTime());
        $order->setUpdatedAt(new \DateTime());
        return $this->update($order, $request);
    }

    public function updateAction(CampusSportswearOrder $order, Request $request)
    {
        return $this->update($order, $request);
    }

    private function update(CampusSportswearOrder $order, Request $request)
    {

        $form = $this->get('form.factory')->create('cs_order', $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->get('oro_ui.router')->redirectAfterSave(
                array(
                    'route' => 'campus_sportswear_order.order_update',
                    'parameters' => array('id' => $order->getId()),
                ),
                array('route' => 'campus_sportswear_order.order_summary'),
                $order
            );
        }

        return array(
            'entity' => $order,
            'form' => $form->createView(),
        );
    }

    public function viewAction()
    {

        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }

    public function deleteAction()
    {
        return $this->render('CampusSportswearOrderBundle:Default:index.html.twig', array('gridName' => 'order-grid'));
    }
}
