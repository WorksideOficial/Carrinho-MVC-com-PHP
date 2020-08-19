<?php

namespace _App\Models\Shopping;

use _App\Models\Product\Product;

class CartItem
{
  private $product;
  private $quantity;

  public function __construct(Product $product, $quantity)
  {
    $this->product = $product;
    $this->quantity =(int)$quantity;
  }

  public function getProduct()
  {
    return $this->product;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function getSubTotal()
  {
    return $this->product->getPrice() * $this->quantity;
  }

}