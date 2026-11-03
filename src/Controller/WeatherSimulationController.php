<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class WeatherSimulationController extends AbstractController
{
    #[Route('/weather', name: 'weather_simulation')]
    public function index(): Response
    {
        return $this->render('weather/index.html.twig');
    }
}
