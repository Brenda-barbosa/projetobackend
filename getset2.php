<?php

class test {
private $sku;
private $name;
private $price;
private $quantity;
private $categories;
private $description;
public function __construct($sku, $name, $price, $quantity, $categories, $description)
{
    $this-> name = $sku;
    $this-> sku = $name;
    $this-> price = $price;
    $this-> quantity = $quantity;
    $this-> categories = $categories;
    $this-> description = $description;
}

public function getsku()
{
    return $this->sku = $_POST['sku'];
}
/**
 * @param mixed $sku
 */
public function setsku($sku)
{
    $this->sku = $sku;
}
public function getname()
{
    return $this->name = $_POST['name'];
}
/**
 * @param mixed $name
 */
public function setname($name)
{
    $this->name = $name;
}
/**
 * @return mixed
 */
public function getprice()
{
    return $this->price = $_POST['price'];
}
/**
 * @param mixed $price
 */
public function setprice($price)
{
    $this->price = $price;
}
/**
 * @return mixed
 */
public function getquantity()
{
    return $this->quantity = $_POST['quantity'];
}
/**
 * @param mixed $quantity
 */
public function setquantity($quantity)
{
    $this->quantity = $quantity;
}
/**
 * @return mixed
 */
public function getcategories()
{
    return $this->categories = $_POST ['category'];
}
/**
 * @param mixed $categories
 */
public function setcategories($categories)
{
    $this->categories = $categories;
}
/**
 * @return mixed
 */
public function getdescription()
{
    return $this-> description= $_POST['description'];
}
/**
 * @param mixed $description
 */
public function setdescription($description)
{
    $this->description = $description;
}
}
?>