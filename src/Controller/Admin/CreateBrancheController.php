<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateBrancheController extends AbstractController
{
    /**
     * @Route("admin/create/branche", name="create_branche")
     */
    public function index()
    {
        return $this->render('admin/create_branche/index.html.twig', [
            'controller_name' => 'CreateBrancheController',
        ]);
    }
}
