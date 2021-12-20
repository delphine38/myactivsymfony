<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReadingController extends AbstractController
{
    /**
     * @Route("/reading", name="reading")
     */
    public function index(): Response
    {
        return $this->render('reading/index.html.twig', [
            'controller_name' => 'ReadingController',
        ]);
    }
}
