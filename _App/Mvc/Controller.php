<?php

namespace _App\Mvc;

abstract class Controller
{
  protected $View;
  
  public function __construct()
  {
    $this->view = new View();
  }
}