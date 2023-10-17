<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'price', 'discount_price', 'category_id'];
    protected $table = 'products';

    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function productsize(){
        return $this->hasMany(ProductSize::class,'product_id');
    }

    public function productcolor(){
        return $this->hasMany(ProductColor::class,'product_id');
    }
}
