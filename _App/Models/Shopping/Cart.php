<?php

namespace _App\Models\Shopping;

interface Cart
{
  public function add(CartItem $item);
  public function update(CartItem $item);
  public function delete($id);
  public function has($id);
  public function getTotal();
  public function getCartItems();
}