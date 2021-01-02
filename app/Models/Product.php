<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'price',
        'sales',
        'quantity',
        'product_detail',
        'image',
        'slug'
    ];

    public function order(){
        return $this->hasMany(OrderItem::class);
    }
}
