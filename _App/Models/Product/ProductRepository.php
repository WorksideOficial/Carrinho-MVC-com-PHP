<?php

namespace _App\Models\Product;

interface ProductRepository
{
  public function getProducts();
  public function getProduct($id);
}