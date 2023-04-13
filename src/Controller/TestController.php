<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'this is my new route of course!',
            'path' => 'src/Controller/TestController.php',
        ]);
    }
}
