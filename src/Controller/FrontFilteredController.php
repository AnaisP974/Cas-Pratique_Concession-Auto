<?php

namespace App\Controller;

use App\Repository\CarRepository;
use App\Repository\CarCategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontFilteredController extends AbstractController
{
    #[Route('/{slug}', name: 'app_front_filteredCategory')]
    public function filteredCategory(string $slug, CarRepository $carRepository, CarCategoryRepository $carCategoryRepository): Response
    {
        // On récupère la catégorie (dans la bdd) correspondant au slug 
        $selectedCategory = $carCategoryRepository->findOneBy(['slug' => $slug]);
        
        return $this->render('front_filtered/index.html.twig', [
            'selectedCategory' => $selectedCategory,
            'cars' => $carRepository->findAll(),
            'categories' => $carCategoryRepository->findAll(),
            'current_menu' => 'front',
        ]);
    }
}
