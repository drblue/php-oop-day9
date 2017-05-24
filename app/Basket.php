<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function products() {
    	return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
