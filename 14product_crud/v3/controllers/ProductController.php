<?php

namespace app\controllers;

use app\Router;

class ProductController
{

    public function index(Router $router)
        {
            $products = $router->db->getProducts();
           
           $router->renderView('products/index', [
                'products' => $products 
           ]);
            
        }

    public function create()
        {
            echo "Create page";
        }

    public function update()
        {
            echo "Update page";
            
        }
        
    public function delete()
        {
            echo "Delete page";
            
        } 



}













?>