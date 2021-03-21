<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DeleteBrancheController extends AbstractController
{
    /**
     * @Route("/admin/delete/branche", name="delete_branche")
     */
    public function index()
    {
        return $this->render('admin/delete_branche/index.html.twig', [
            'controller_name' => 'DeleteBrancheController',
        ]);
    }
}
