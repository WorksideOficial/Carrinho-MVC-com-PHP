<?php

namespace _App\Models\Product;

class ProductRepositoryPDO implements ProductRepository
{
  private $pdo;

  public function __construct(\PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function getProducts()
  {
    $product = $this->pdo->prepare("SELECT * FROM product");
    $product->setFetchMode(\PDO::FETCH_CLASS, '_App\Models\Product\Product');
    $product->execute();
    return $product->fetchAll();
  }

  public function getProduct($id)
  {
    $product = $this->pdo->prepare("SELECT * FROM product WHERE id = :id");
    $product->bindValue(":id", $id, \PDO::PARAM_INT);
    $product->setFetchMode(\PDO::FETCH_CLASS, '_App\Models\Product\Product');
    $product->execute();
    return $product->fetch();
  }
}