<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function item() {
        return $this->hasMany('App\Models\Item');
    }

    protected $fillable = [
        'username',
        'name',
        'address',
        'password'
    ];

    public $timestamps = false;

    protected $hidden = [
        'password',
    ];
}
