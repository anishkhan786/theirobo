<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationOrder  extends Model
{
    use HasFactory;

    public $table = 'consultation_orders';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

     protected $fillable = [
        'order_id','service_id','name','email','phone',
        'message','amount','status'
    ];

     public function service()
    {
        return $this->belongsTo(ConsultationService::class);
    }

    public function payments()
    {
        return $this->hasMany(ConsultationPayment::class);
    }
}
