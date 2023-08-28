<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduleVisit extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'agent_id',
        'apartment_id',
        'date',
        'email',
        'name',
        'number',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'schedule_visits';

    protected $casts = [
        'date' => 'date',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
