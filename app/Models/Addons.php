<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addons extends Model
{
    use HasFactory, Uuids;

    public $table = 'tour_addons';

    protected $fillable = [
        'name',
        'description',
        'price',
        'price_show',
        'image'
    ];

    public function getImageUrlAttribute()
    {
        if($this->image != "")
        {
            return asset('assets/images/add-ons/'.$this->image);
        }
        return '';
    }
}
