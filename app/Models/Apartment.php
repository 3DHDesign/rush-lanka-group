<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apartment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'image'];

    protected $searchableFields = ['*'];

    public function scheduleVisits()
    {
        return $this->hasMany(ScheduleVisit::class);
    }
}
