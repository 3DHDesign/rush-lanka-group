<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Residency extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'block',
        'project_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'block' => 'array',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
