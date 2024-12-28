<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
    // #[Route('/', name: 'index')]
    #[Route('/hello/{name}', name: 'index')]
    public function index(String $name): Response
    {
        return new Response("Hello $name!");
    }

    #[Route('/simplicity', methods: ['GET'])]
    public function simple(): Response
    {
        return new Response('Simple! Easy! Great!');
    }

    // default route
    #[Route('/', name: 'default')]
    public function default(): Response
    {
        return new Response("Hello (default)!");
    }

    // any other route
    #[Route('/{any}', name: 'any', requirements: ['any' => '.*'])]
    public function any(string $any): Response
    {
        return new Response("Erm... $any?");
    }
}