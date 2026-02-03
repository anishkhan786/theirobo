<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationService  extends Model
{
    use HasFactory;

    public $table = 'consultation_services';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = ['name','type','price','duration_minutes'];

    public function orders()
    {
        return $this->hasMany(ConsultationOrder::class);
    }

    public function features()
    {
        return $this->hasMany(ConsultationServiceFeature::class);
    }
}
