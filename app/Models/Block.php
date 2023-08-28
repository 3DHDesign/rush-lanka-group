<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Block extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'bed_bath',
        'sqft',
        'status',
        'image',
        'project_id',
        'floor_id',
    ];

    protected $searchableFields = ['*'];

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
