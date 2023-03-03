<?php
class Product
{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDiscountedPrice($discount)
    {
        $discountprice = $this->price * (1-$discount/100);
        return round($discountprice/2);
    }
}

$product = new Product('Áo sơ mi nam',200000);
$discountprice = $product->getDiscountedPrice(10);
echo 'Tên sản phẩm :' . $product->name . '<br>';
echo 'Giá gốc:' . $product->price . '<br>';
echo 'Giá sau khi triết khấu :'. $discountprice . '<br>';
?>