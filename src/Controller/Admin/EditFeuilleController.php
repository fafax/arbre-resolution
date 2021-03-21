<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditFeuilleController extends AbstractController
{
    /**
     * @Route("/edit/feuille", name="edit_feuille")
     */
    public function index()
    {
        return $this->render('admin/edit_feuille/index.html.twig', [
            'controller_name' => 'EditFeuilleController',
        ]);
    }

    /**
     * @Route("/admin/edit/feuille", name="admin_edit_feuille")
     */
    public function edit()
    {
        return $this->render('admin/edit_feuille/index.html.twig', [
            'controller_name' => 'EditFeuilleController',
        ]);
    }


}
