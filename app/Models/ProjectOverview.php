<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectOverview extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['description', 'project_id'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'description' => 'array',
    ];


    protected $table = 'project_overviews';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
