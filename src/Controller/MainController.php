<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/main2', name: 'app_main2')]
    public function index2(): Response
    {
        return $this->render('main/index2.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/societe', name: 'app_societe')]
    public function societe(): Response
    {
        return $this->render('main/societe.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/mentions-legales', name: 'app_mention')]
    public function mention(): Response
    {
        return $this->render('main/mention.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
