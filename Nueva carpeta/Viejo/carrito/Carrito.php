<?php

interface buyInterface
{
    public function products($product,$price);
    public function clients($money);
}

ProductsCollection
{
    private $products = [];

    public function add (ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function get ()
    {
        return $this->products;
    }
}

$collection = new productsCollection;
$collection-> add(new products)



StorageInterface
{
    getProducts(): array;
}


ProductInterface
{
    getPrice();
}

interface CartInterface
{
    add(productInterface $product)
    remove ();
    clear ();
    getProductCount();
}

CustomerInterface
{
    setlimit(double $limit)
    setCart(cartInterface $cart)
    seach();
    buy ();
}