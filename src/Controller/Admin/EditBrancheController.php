<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditBrancheController extends AbstractController
{
    /**
     * @Route("/edit/branche", name="edit_branche")
     */
    public function index()
    {
        return $this->render('admin/edit_branche/index.html.twig', [
            'controller_name' => 'EditBrancheController',
        ]);
    }

    /**
     * @Route("/admin/edit/branche", name="admin_edit_branche")
     */
    public function edit()
    {
        return $this->render('admin/edit_branche/index.html.twig', [
            'controller_name' => 'EditBrancheController',
        ]);
    }
}
