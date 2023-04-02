<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'organization',
        'address',
        'province',
        'city',
        'phone',

    ];

    public function getFullnameAttribute()
    {
        return "$this->firstname $this->lastname";
    }
}
