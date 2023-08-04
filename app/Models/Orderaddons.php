<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderaddons extends Model
{
    use HasFactory, Uuids;

    public $table = 'addons_order';

    protected $guarded = [];

    /**
     * Get the user that owns the Orderaddons
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Addons()
    {
        return $this->belongsTo(Addons::class, 'id_addons', 'id');
    }
}
