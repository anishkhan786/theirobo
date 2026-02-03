<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationPayment  extends Model
{
    use HasFactory;

    public $table = 'consultation_payments';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'consultation_order_id','transaction_id',
        'payment_method','amount','payment_status',
        'gateway_response'
    ];

    protected $casts = [
        'gateway_response' => 'array'
    ];

    public function order()
    {
        return $this->belongsTo(ConsultationOrder::class);
    }
}
