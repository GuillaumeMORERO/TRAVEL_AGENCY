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

    public function etapes() {
        return $this->hasMany(Etape::class);
    }
}
