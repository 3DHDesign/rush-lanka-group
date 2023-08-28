<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['e_brochure', 'coc', 'project_id'];

    protected $searchableFields = ['*'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
