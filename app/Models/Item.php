<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function cart() {
        return $this->belongsToMany('App\Models\Cart');
    }

    public function review() {
        return $this->belongsToMany('App\Models\Review');
    }

    public function shop() {
        return $this->belongsTo('App\Models\Shop');
    }

    protected $fillable = [
        'image',
        'name',
        'type',
        'price'
    ];
}