<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SocieteController extends AbstractController
{
    #[Route('/societe', name: 'app_societe')]
    public function societe(): Response
    {
        return $this->render('societe/societe.html.twig', [
            'controller_name' => 'SocieteController',
        ]);
    }

    #[Route('/recrutement', name: 'app_recrutement')]
    public function recrutement(): Response
    {
        return $this->render('societe/recrutement.html.twig', [
            'controller_name' => 'SocieteController',
        ]);
    }
}
