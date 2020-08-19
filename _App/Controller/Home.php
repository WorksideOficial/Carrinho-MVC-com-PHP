<?php

namespace _App\Controller;

use _App\Mvc\Controller;
use _App\Models\Product\ProductRepository;

class Home extends Controller
{
  private $product;

  public function __construct(ProductRepository $product)
  {
    parent::__construct();
    $this->product = $product;
  }

  public function index()
  {
    $this->view->set('products', $this->product->getProducts());
    $this->view->render("home");
  }
}