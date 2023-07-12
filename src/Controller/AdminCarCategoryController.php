<?php

namespace App\Controller;

use App\Entity\CarCategory;
use App\Form\CarCategoryType;
use App\Repository\CarCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/category')]
class AdminCarCategoryController extends AbstractController
{
    #[Route('/', name: 'app_admin_car_category_index', methods: ['GET'])]
    public function index(CarCategoryRepository $carCategoryRepository): Response
    {
        return $this->render('admin_car_category/index.html.twig', [
            'car_categories' => $carCategoryRepository->findAll(),
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/new', name: 'app_admin_car_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carCategory = new CarCategory();
        $form = $this->createForm(CarCategoryType::class, $carCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($carCategory);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_car_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_car_category/new.html.twig', [
            'car_category' => $carCategory,
            'form' => $form,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_car_category_show', methods: ['GET'])]
    public function show(CarCategory $carCategory): Response
    {
        return $this->render('admin_car_category/show.html.twig', [
            'car_category' => $carCategory,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_car_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CarCategory $carCategory, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CarCategoryType::class, $carCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_car_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_car_category/edit.html.twig', [
            'car_category' => $carCategory,
            'form' => $form,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_car_category_delete', methods: ['POST'])]
    public function delete(Request $request, CarCategory $carCategory, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carCategory->getId(), $request->request->get('_token'))) {
            $entityManager->remove($carCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_car_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
