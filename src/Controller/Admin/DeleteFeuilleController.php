<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DeleteFeuilleController extends AbstractController
{
    /**
     * @Route("/admin/delete/feuille", name="delete_feuille")
     */
    public function index()
    {
        return $this->render('admin/delete_feuille/index.html.twig', [
            'controller_name' => 'DeleteFeuilleController',
        ]);
    }
}
