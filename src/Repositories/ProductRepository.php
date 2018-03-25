<?php

namespace Shipping\Repositories;

interface ProductRepository
{
    public function feeByWeight();
    
    public function feeByDimension();
    
    public function feeByProductType();
}
