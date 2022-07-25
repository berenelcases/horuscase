<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\TriangleModel;

class TriangleController extends AbstractController
{
    /**
     * @Route("/triangle/{a}/{b}/{c}", name="app_triangle")
     */
    public function index(float $a,float $b, float $c): JsonResponse
    {
        $triangleModel = new TriangleModel($a,$b,$c);
        $triangleModel->calculateSurface();
        $triangleModel->calculateCircumference();
        return $this->json($triangleModel->getResponseModel(),Response::HTTP_OK);
    }
}
