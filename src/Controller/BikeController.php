<?php

namespace App\Controller;

use App\Repository\BikeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BikeController extends AbstractController
{
    /**
     * @Route("/bike", name="bike")
     */
    public function index(BikeRepository $bikeRepository): Response
    {
        $bikes = $bikeRepository->findAll();

        return $this->render('bike/index.html.twig', [
            'bikes' => $Bikes = $bikeRepository->findAll(),
        ]);
    }
}
