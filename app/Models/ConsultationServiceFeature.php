<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationServiceFeature extends Model
{
    public $table = 'consultation_service_features';

    protected $fillable = [
        'consultation_service_id',
        'feature_title'
    ];

    public function serviceType()
    {
        return $this->belongsTo(ConsultationService::class,'consultation_service_id');
    }
}
