<?php
namespace Mydons\ConfigurableApiPrice\Plugin\Product\Type\Configurable;
class Price
{
    public function aroundGetPrice($subject, $proceed,$product)
    {
       if($product->getTypeId()=="configurable"){
           return $product->getFinalPrice();
       } 
       else {
           $returnValue = $proceed($product);
           return $returnValue;
       }      
    }
}
