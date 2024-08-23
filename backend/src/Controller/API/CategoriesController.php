<?php

namespace App\Controller\API;

use App\Entity\Categories;
use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/api/categories', name: 'api_categories')]
class CategoriesController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoriesRepository $categoriesRepository): JsonResponse
    {
        $categories = $categoriesRepository->findAll();
        return $this->json($categories, context: ['groups' => 'api_categories_index']);
    }
    #[Route('/{name}', name: 'show')]

    public function show(categories $categories): JsonResponse
    {

        return $this->json($categories, context: ['groups' => ['api_categories_index', 'api_categories_show']]);
    }
}
