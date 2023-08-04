<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Uuids;

    public $table = 'orders';

    protected $guarded = [];


   public function Orderaddons()
   {
       return $this->hasMany(Orderaddons::class, 'id_order', 'id');
   }
   /**
    * Get the user that owns the Order
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function Tour()
   {
       return $this->belongsTo(Tour::class, 'id_tour', 'id');
   }
}
