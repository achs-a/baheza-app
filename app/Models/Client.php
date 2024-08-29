<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Define table name if different from model name
    protected $table = 'clients';

    // Define fillable fields
    protected $fillable = [
        'fullName',
        'houseNumber',
        'sector',
        'paymentFees',
    ];

    // Define relationships
    public function payments()
    {
        return $this->hasMany(Payment::class, 'client_id');
    }

    public function historicalRecords()
    {
       // return $this->hasMany(HistoricalRecord::class, 'client_id');
    }
}


