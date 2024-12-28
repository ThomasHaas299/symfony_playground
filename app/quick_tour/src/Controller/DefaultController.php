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
}