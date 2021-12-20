<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BikesController extends AbstractController
{
    /**
     * @Route("/bikes", name="bikes")
     */
    public function index(): Response
    {
        return $this->render('bikes/index.html.twig', [
            'controller_name' => 'BikesController',
        ]);
    }
}
