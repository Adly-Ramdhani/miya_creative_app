<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Admin extends Model
{
    use HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;
    protected $fillable = [
        'photo',
        'title',
        'description',
        'price',
        'category',
        'menu',
    ];
}