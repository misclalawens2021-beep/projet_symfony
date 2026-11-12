<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CodeController extends AbstractController
{
    #[Route('/code', name: 'app_code')]
    public function index(): Response
    {
        return $this->render('code/index.html.twig', [
            'controller_name' => 'CodeController',
        ]);
    }
}
/** Création d'un controleur = 'php bin/console make:controller nameController'
 * Exécuter le code = 'php -S 127.0.0.1:8000 -t public'*/ 
