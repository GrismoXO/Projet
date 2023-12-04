<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'title',
        'image',
        'alt',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
