<?php

namespace App;

use App\Basket;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
	protected $fillable = [ "quantity", "basket_id", "product_id" ];

    public function basket() {
    	return $this->belongsTo(Basket::class);
    }

    public function product() {
    	return $this->belongsTo(Product::class);
    }
}
