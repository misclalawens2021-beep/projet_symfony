<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class HomeControllerTest extends WebTestCase
{
    public function testHomePageIsSuccessful(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        // Vérifie que la page d'accueil se charge avec succès
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);

        // Vérifie la présence de notre identité visuelle "VoltTech"
        $this->assertSelectorTextContains('.logo', 'VoltTech');

        // Vérifie la présence du produit vedette
        $this->assertSelectorTextContains('.hero-title', 'QuantumBook Pro 16');
    }

    public function testCategoryFiltering(): void
    {
        $client = static::createClient();
        
        // Filtre sur la catégorie "smartphones"
        $crawler = $client->request('GET', '/?category=smartphones');

        $this->assertResponseIsSuccessful();

        // Le smartphone AeroPhone 15 Pro doit être présent dans la grille de produits
        $this->assertSelectorTextContains('.product-card', 'AeroPhone 15 Pro');

        // L'ordinateur QuantumBook Pro 16 ne doit pas être affiché
        $this->assertSelectorTextNotContains('.product-grid', 'QuantumBook Pro 16');
    }
}
