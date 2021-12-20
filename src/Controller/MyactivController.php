<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyactivController extends AbstractController
{
    /**
     * @Route("/myactiv", name="myactiv")
     */
    public function index(): Response
    {
        return $this->render('myactiv/index.html.twig', [
            'controller_name' => 'MyactivController',
        ]);
    }
}
