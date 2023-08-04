<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory, Uuids;

    public $table = 'tour_paket';

    protected $fillable = [
        'name',
        'price',
        'price_show',
        'description',
    ];
}
