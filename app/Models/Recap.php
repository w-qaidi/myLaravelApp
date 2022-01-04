<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'purchase',
        'premium',
        'inquiries',
        'revenue',
        'cost',
        'profit',
        'completions',
    ];
}
