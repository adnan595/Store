<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_size_id', 'product_color_id', 'quantity', 'price_two', 'discount', 'status'];
    protected $table = 'product_color_size';
    public function productsize(){
        return $this->belongsTo(ProductSize::class,'product_size_id');
    }
    public function productcolor(){
        return $this->belongsTo(productcolor::class,'product_color_id');
    }
    public function productimage(){
        return $this->hasMany(ProductImage::class,'product_color_size_id');
    }
    public function orderdetail(){
        return $this->hasMany(OrderDetail::class,'product_color_size_id');
    }
}
