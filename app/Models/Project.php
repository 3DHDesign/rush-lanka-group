<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'breadcrumb_image',
        'about_image',
        'heading',
        'description',
        'bedrooms',
        'gallery',
        'sqft',
        'bathrooms',
        'parkings',
        'garages',
        'about_description',
        'v_tour',
        'status',
        'order_by',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'gallery' => 'array',
        'status' => 'boolean',
    ];

    public function residencies()
    {
        return $this->hasMany(Residency::class);
    }

    public function projectOverviews()
    {
        return $this->hasMany(ProjectOverview::class);
    }

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
