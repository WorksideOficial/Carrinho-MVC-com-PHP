<?php
session_start();
define("DIR", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);

include_once DIR.DS.'_App'.DS.'Loader.php';

$loader = new _App\Loader();
$loader->register();


$pdo = new \PDO("mysql:host=localhost;dbname=cart-mvc", "root", "");
$productRepository = new _App\Models\Product\ProductRepositoryPDO($pdo);

$page   = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch($page)
{
  case 'cart':
    $sessionCart = new _App\Models\Shopping\CartSession();
    $cart = new _App\Controller\Cart($productRepository, $sessionCart);
    call_user_func_array(array($cart, $action), array());
  break;

  default:
    $home = new _App\Controller\Home($productRepository);
    call_user_func_array(array($home, $action), array());
}