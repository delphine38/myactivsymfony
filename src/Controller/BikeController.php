<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BikeController extends AbstractController
{
    /**
     * @Route("/bike", name="bike")
     */
    public function index(): Response
    {
        return $this->render('bike/index.html.twig', [
            'controller_name' => 'BikeController',
        ]);
    }
}
