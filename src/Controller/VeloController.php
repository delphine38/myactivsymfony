<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VeloController extends AbstractController
{
    /**
     * @Route("/velo", name="velo")
     */
    public function index(): Response
    {
        return $this->render('velo/index.html.twig', [
            'controller_name' => 'VeloController',
        ]);
    }
}
