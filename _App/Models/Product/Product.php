<?php

namespace _App\Models\Product;

class Product
{
  private $id;
  private $name;
  private $price;

  public function setId($id)
  {
    if(!is_int($id)){
      throw new \InvalidArgumentException("vopcê precisa informar um id");
    }
  }

  public function setName($name)
  {
    if(empty($$name)){
      throw new \InvalidArgumentException("vopcê precisa informar um nome válido");
    }
  }

  public function setPrice($price)
  {
    if(!is_float($price)){
      throw new \InvalidArgumentException("vopcê precisa informar um numero float");
    }
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

}