<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define table name if different from model name
    protected $table = 'payments';

    // Define fillable fields
    protected $fillable = [
        'client_id',
        'amount_paid',
        'payment_date',
        'payment_method',
    ];

    // Define relationships
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
