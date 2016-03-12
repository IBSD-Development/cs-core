<?php

namespace CampusSportswear\Bundle\OrderBundle\Controller;

use CampusSportswear\Bundle\OrderBundle\Entity\CampusSportswearOrder;
use Oro\Bundle\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OrderController extends Controller
{
    /**
     * @Route("/", name="campus_sportswear_order.order_summary")
     * @Template("CampusSportswearOrderBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return array('gridName' => 'order-grid');
    }

    /**
     * @Route("/create", name="campus_sportswear_order.order_create")
     * @Template("CampusSportswearOrderBundle:Default:update.html.twig")
     * @param Request $request
     * @return array
     */
    public function createAction(Request $request)
    {
        $order = new CampusSportswearOrder();
        $order->setCreatedAt(new \DateTime());
        $order->setUpdatedAt(new \DateTime());
        $order->setOrderStatus(ORDER_NEW);
        return $this->update($order, $request);
    }

    /**
     * @Route("/{id}/update", name="campus_sportswear_order.order_update", requirements={"id"="\d+"})
     * @Template("CampusSportswearOrderBundle:Default:update.html.twig")
     * @param CampusSportswearOrder $order
     * @param Request $request
     * @return array
     */
    public function updateAction(CampusSportswearOrder $order, Request $request)
    {
        return $this->update($order, $request);
    }

    private function update(CampusSportswearOrder $order, Request $request)
    {

        $form = $this->get('form.factory')->create('cs_order', $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $order->setUpdatedAt(new \DateTime());
            $order->setUpdatedBy($this->getUser());
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

    /**
     * @Route("/{id}", name="campus_sportswear_order.order_view", requirements={"id"="\d+"})
     * @Template("CampusSportswearOrderBundle:Default:update.html.twig")
     */
    public function viewAction()
    {

        return array('gridName' => 'order-grid');
    }

    /**
     * @Route("/{id}/delete", name="campus_sportswear_order.order_delete", requirements={"id"="\d+"})
     * @Template("CampusSportswearOrderBundle:Default:update.html.twig")
     */
    public function deleteAction()
    {
        return array('gridName' => 'order-grid');
    }
}
