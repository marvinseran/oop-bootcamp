<?php

class Item {
    protected $name;
    protected $quantity;
    protected $pricePerUnit;
    protected $taxRate;

    public function __construct($name, $quantity, $pricePerUnit, $taxRate) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->pricePerUnit = $pricePerUnit;
        $this->taxRate = $taxRate;
    }

    public function getTotalPrice() {
        return $this->quantity * $this->pricePerUnit;
    }

    public function getTotalTax() {
        return $this->getTotalPrice() * $this->taxRate;
    }
}

class Basket {
    private $items = [];

    public function addItem(Item $item) {
        $this->items[] = $item;
    }

    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->getTotalPrice();
        }
        return $totalPrice;
    }

    public function getTotalTax() {
        $totalTax = 0;
        foreach ($this->items as $item) {
            $totalTax += $item->getTotalTax();
        }
        return $totalTax;
    }
}

// Create items
$banana = new Item("Banana", 6, 1, 0.06);
$apple = new Item("Apple", 3, 1.5, 0.06);
$wine = new Item("Bottle of Wine", 2, 10, 0.21);

// Add items to the basket
$basket = new Basket();
$basket->addItem($banana);
$basket->addItem($apple);
$basket->addItem($wine);

// Calculate and print the total price and tax
echo "Total price: €" . $basket->getTotalPrice() . "\n";
echo "Total tax: €" . $basket->getTotalTax() . "\n";

?>
