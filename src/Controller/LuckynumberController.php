<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LuckynumberController extends AbstractController {
    #[Route('/mon_site', name: 'lawens')]
    public function index(): Response {
        return $this->render('luckynumber/index.html.twig', [
            'mon_site' => 'mon site',
            'prenom2' => 'Lawens',
            'pt' => '.'
        ]);
    }
}
