<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use App\Repository\RecetteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin', methods: ['GET'])]
    public function index(RecetteRepository $postRepository): Response
    {
        $post = $postRepository->findLast(10);
        return $this->render('admin/index.html.twig', [
            'posts' => $post,
        ]);
    }
    // #[Route('/admin', name: 'app_admin', methods: ['GET'])]

    // public function delete(ContactRepository $doctrine ,RecetteRepository $delet, int $id): Response
    // {
    //     $entityManager = $doctrine->getManager();
    //     $product = $entityManager->getRepository(Product::class)->find($id);
    //     $em = $delet -> remove($product);

    //     return $this->render('admin/index.html.twig', [
    //         'delete' => $em,
    //     ]);
    // }
}
