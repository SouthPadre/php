<?php
namespace Market;

class Order
{
	public $basket;

	public function __construct(Basket $basket)
	{
		$this->basket = $basket;
	}
	public function getBasket()
	{
		return $this->basket;
	}

	public function getPrice()
	{
		return $this->getBasket()->getPrice();
	}
}

class Basket
{
	public $products;

	public function addProduct(Product $product, $quantity)
	{
		$this->products[] = [ 'name' => $product, 'quantity' => $quantity];
		 // ['name' => $product->name, 'price' => $product->price, 'quantity' => $quantity];
	}

	public function getPrice()
	{
		$price = 0;
		foreach ($this->products as $product) {
			$price += $product['name']->price * $product['quantity'];
		}
		return ($price);
	}

	public function describe()
	{
		$desc = '';
		// $desc .= "<p><Наименование товара> - <Цена одной позиции> - <Количество></p>";
		foreach ($this->products as $product) {
			$desc .= "<p>" . $product['name']->name . " - " . $product['name']->price . " - " . $product['quantity'] . "</p>";
		}
		 return ($desc);
	}

}

class Product
{
	public $name;
	public $price;
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName()
	{
		return ($this->name);
	}

	public function getPrice()
	{
		return ($this->price);
	}
}
$product1 = new Product('burger', 20);
$product2 = new Product('toy', 7);
$product3 = new Product('iphone', 1500);
$product4 = new Product('coca-cola', 2);
$product5 = new Product('table', 100);

// var_dump($product1);
$exBasket = new Basket;
$exBasket->addProduct($product1, 7);
$exBasket->addProduct($product2, 3);
$exBasket->addProduct($product3, 1);
$exBasket->addProduct($product4, 2);
$exBasket->addProduct($product5, 1);
// echo $exBasket->describe();
$order = new Order($exBasket);
// echo '<div style="text-align: center;">';
// echo "<p> Итого " . $order->getPrice() . "</p></div>";
include ('ex_04.php');
$Nicola = new \Users\User("Николай Николаевич", 'nicolaich@mail.com');
$Nicola->notify('для вас создан заказ на сумму ' . $order->getPrice() . ' состав ' . $exBasket->describe());