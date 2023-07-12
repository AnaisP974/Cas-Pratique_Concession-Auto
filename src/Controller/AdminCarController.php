<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/vehicules')]
class AdminCarController extends AbstractController
{
    #[Route('/', name: 'app_admin_car_index', methods: ['GET'])]
    public function index(CarRepository $carRepository): Response
    {
        return $this->render('admin_car/index.html.twig', [
            'cars' => $carRepository->findAll(),
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/new', name: 'app_admin_car_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($car);
            $entityManager->flush();

            $this->addFlash("success", "Le nouveau véhicule a bien été créé !");
            return $this->redirectToRoute('app_admin_car_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_car/new.html.twig', [
            'car' => $car,
            'form' => $form,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_car_show', methods: ['GET'])]
    public function show(Car $car): Response
    {
        return $this->render('admin_car/show.html.twig', [
            'car' => $car,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_car_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Car $car, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash("warning", "Le véhicule a bien été modifié !");
            return $this->redirectToRoute('app_admin_car_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_car/edit.html.twig', [
            'car' => $car,
            'form' => $form,
            'current_menu' => 'admin',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_car_delete', methods: ['POST'])]
    public function delete(Request $request, Car $car, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$car->getId(), $request->request->get('_token'))) {
            $entityManager->remove($car);
            $entityManager->flush();
            $this->addFlash("danger", "Le véhicule a bien été supprimé !");
        }

        return $this->redirectToRoute('app_admin_car_index', [], Response::HTTP_SEE_OTHER);
    }
}
