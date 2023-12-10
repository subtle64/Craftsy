<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function item() {
        return $this->hasOne('App\Models\Item');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public $timestamps = false;

    protected $fillable = [
        'rating',
    ];
}
