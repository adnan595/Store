<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'size'];
    protected $table = 'product_sizes';

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function productcolorsize(){
        return $this->hasMany(ProductColorSize::class,'product_size_id');
    }

}
