<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralDetails extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'cooperate_video',
        'address',
        'telephone',
        'email',
        'fb_link',
        'ig_link',
        'linkedin_link',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'general_details';
}
