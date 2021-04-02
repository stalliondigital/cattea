<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = ['title', 'altText', 'category', 'imagePath'];

    public function path()
    {
        return route('portfolio.show', $this);
    }
}
