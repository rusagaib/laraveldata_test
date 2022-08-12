<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;

class Product extends Model
{
    use HasFactory;
    public $table = 'product';
   // protected $primaryKey = 'id';
   // protected $fillable = ['nama', 'alamat', 'no_tlp', 'tgl_regis'];

   public function order_detail(){
     return $this->hasMany(OrderDetail::class);
   } 
}
