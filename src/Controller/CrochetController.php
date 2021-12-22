<?php

namespace App\Controller;

use App\Repository\CrochetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrochetController extends AbstractController
{
    /**
     * @Route("/crochet", name="crochet")
     */
    public function index(CrochetRepository $crochetRepository): Response
    {
        $crochets = $crochetRepository->findAll();
        return $this->render('crochet/index.html.twig', [
            'crochets' => $crochets = $crochetRepository->findAll(),
        ]);
    }
}
