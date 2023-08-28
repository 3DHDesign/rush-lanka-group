<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurStrength extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['units', 'parkings', 'apartments', 'bedrooms'];

    protected $searchableFields = ['*'];

    protected $table = 'our_strengths';
}
