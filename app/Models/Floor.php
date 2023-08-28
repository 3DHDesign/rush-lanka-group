<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Floor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'project_id', 'blocks'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'blocks' => 'array',
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }
}
