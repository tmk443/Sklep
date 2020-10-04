<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller{
    /**
     * @Route("/", methods={"GET"})
     */
    public function index(){

        $products = ['Product 1', 'Product 2',' Product 3'];


        return $this->render('products/index.html.twig', array
        ('products' => $products));
    }
}