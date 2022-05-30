<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index', methods: ['GET'])]
    public function index(RecetteRepository $postRepository): Response
    {
        $post = $postRepository->findLast(10);
        return $this->render('index/index.html.twig', [
            'posts' => $post,
        ]);
    }
}
