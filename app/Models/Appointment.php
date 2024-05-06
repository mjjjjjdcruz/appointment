<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'phone',
        'address',
        'city',
        'location',
        'date',
        'time',
        'type',
        'theme',
        'package',
    ];

    protected $primaryKey = 'appointment_id';
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
