<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'code',
        'name',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }
}
