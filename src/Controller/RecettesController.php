<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecettesController extends AbstractController
{
    #[Route('/recettes', name: 'app_recettes', methods: ['GET'] )]
    public function index(RecetteRepository $postRepository): Response
    {
        $post = $postRepository->findLast(10);
        return $this->render('recettes/index.html.twig', [
            'posts' => $post,
        ]);
    }


}
