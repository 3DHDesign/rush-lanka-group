<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'heading',
        'small_description',
        'long_description',
        'slug',
        'breadcrum_image',
        'status',
        'order_by',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];
}
