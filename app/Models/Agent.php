<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'designation',
        'email',
        'whatsapp',
        'status',
        'order_by',
        'image',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scheduleVisits()
    {
        return $this->hasMany(ScheduleVisit::class);
    }
}
