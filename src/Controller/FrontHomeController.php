<?php

namespace App\Controller;

use App\Repository\CarRepository;
use App\Repository\CarCategoryRepository;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontHomeController extends AbstractController
{
    #[Route('/', name: 'app_front_home', methods:['POST', 'GET'])]
    public function index(CarRepository $carRepository, CarCategoryRepository $carCategoryRepository, Request $request, PaginatorInterface $paginator): Response
    {
        
        // vérifier s'il y a une recherche dans la requête
        if(!is_null($request->request->get('searchByName'))){
            // récupérer la valeur de la recherche
            $searchByName = $request->request->get('searchByName');
            // déclencher une méthode dans la repository
            $cars = $carRepository->search($searchByName); 

        }else{
            //sinon, récupère tous les véhicules 
            $cars = $carRepository->findAll();
        }
        
        // pagination
        $pagination = $paginator->paginate(
            $cars,
            $request->query->getInt('page', 1),
            20
        );

        return $this->render('front_home/index.html.twig', [
           'cars' => $pagination,
           'categories' => $carCategoryRepository->findAll(),
           'selectedCategory' => null,
           'current_menu' => 'front',
        ]);
    }

    
}
