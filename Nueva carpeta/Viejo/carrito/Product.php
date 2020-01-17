<?php


class Products implements CartInterface
{
    public function getProduct(array $product,$price)
    {
        $product = array( 1, 2, 3, 4, 5);
        
        $product[0] = "oneprod";
        $product[1] = "twoprod";
        $product[2] = "threeprod";
        $product[3] = "fourprod";
        $product[4] = "fiveprod";

        echo $product;
    } 
}

?>