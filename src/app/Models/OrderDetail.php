<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = "order_detail";
    protected $primaryKey = 'id';
    protected $foreignKey = 'product_id';

    public function product(){
        return $this->belongsTo(Product::class); 
    }

}
