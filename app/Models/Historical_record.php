<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricalRecord extends Model
{
    use HasFactory;

    // Define table name if different from model name
    protected $table = 'historical_records';

    // Define fillable fields
    protected $fillable = [
        'client_id',
        'payment_id',
        'status',
        'recorded_at',
        'notes',
    ];

    // Define relationships
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}

