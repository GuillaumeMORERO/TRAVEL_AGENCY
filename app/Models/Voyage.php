<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $table = 'voyages';

    protected $fillable = [
        'departure_date', 'arrival_date'
    ];

    protected $casts = [
        'departure_date' => 'datetime:d/m/Y',
        'arrival_date' => 'datetime:d/m/Y',
    ];
    public function serializeDate($date)
    {
        return $date->format('d/m/Y');
    }

    public function etapes() {
        return $this->hasMany(Etape::class)->orderBy('order', 'asc');
    }
}
