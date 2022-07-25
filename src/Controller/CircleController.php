<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\CircleModel;

class CircleController extends AbstractController
{
    /**
     * @Route("/circle/{radius}", name="app_circle")
     */
    public function index(float $radius): JsonResponse
    {
        $circleModel = new CircleModel($radius);
        $circleModel->calculateSurface();
        $circleModel->calculateCircumference();
        return $this->json($circleModel->getResponseModel(),Response::HTTP_OK);
    }
}
