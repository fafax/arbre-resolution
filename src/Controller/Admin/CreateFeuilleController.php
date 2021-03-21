<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateFeuilleController extends AbstractController
{
    /**
     * @Route("/admin/create/feuille", name="create_feuille")
     */
    public function index()
    {
        return $this->render('admin/create_feuille/index.html.twig', [
            'controller_name' => 'CreateFeuilleController',
        ]);
    }
}
