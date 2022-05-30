<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageRecusController extends AbstractController
{
    #[Route('/message/recus', name: 'app_message_recus')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contact = $contactRepository->findLast();
        return $this->render('message_recus/index.html.twig', [
            'messages' => $contact, 
        ]);
    }
}
