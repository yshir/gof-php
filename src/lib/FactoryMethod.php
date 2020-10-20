<?php

abstract class Product
{
  abstract public function use(): void;
}

abstract class ProductFactory
{
  abstract public function createProduct(string $owner): Product;
  abstract public function registerProduct(Product $product): void;
  final public function create(string $owner) {
    $product = $this->createProduct($owner);
    $this->registerProduct($product);
    return $product;
  }
}

class IDCard extends Product
{
  private $owner;

  public function __construct(string $owner)
  {
    $this->owner = $owner;
    echo "Created {$this->owner}'s ID card.\n";
  }

  public static function cast($arg): self
  {
    if (!($arg instanceof self)) {
      throw new InvalidArgumentException(("{$arg} is not instance of IDCard"));
    }
    return $arg;
  }

  public function use(): void
  {
    echo "Used {$this->owner}'s ID card.\n";
  }

  public function getOwner(): string
  {
    return $this->owner;
  }
}

class IDCardFactory extends ProductFactory
{
  private $owners;

  public function __construct()
  {
    $this->owners = [];
  }

  public function createProduct(string $owner): Product
  {
    return new IDCard($owner);
  }

  public function registerProduct(Product $product): void
  {
    $idCard = IDCard::cast($product);
    array_push($this->owners, $idCard->getOwner());
  }

  public function getOwners(): array
  {
    return $this->owners;
  }
}
