<?php

namespace MiguelAlcaino\MindbodyPaymentsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingController extends AbstractController
{
    /**
     * @Route("/shopping/single/{type}/{itemId}", name="shopping_shop_single_item", methods={"GET"})
     * @IsGranted("ROLE_MINDBODY_USER")
     * @param Request $request
     * @param string  $type
     * @param string  $itemId
     *
     * @return Response
     */
    public function shopSingleItemAction(Request $request, string $type, string $itemId): Response
    {
        return $this->render('@MiguelAlcainoMindbodyPayments/shopping/single_item.html.twig');
    }
}
