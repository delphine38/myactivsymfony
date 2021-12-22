<?php

namespace App\Controller;

use App\Repository\ReadingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReadingController extends AbstractController
{
    /**
     * @Route("/reading", name="reading")
     */
    public function index(ReadingRepository $readingRepository): Response
    {
        $readings = $readingRepository->findAll();
        return $this->render('reading/index.html.twig', [
            'readings' => $readingRepository->findAll(),
        ]);
    }
}
