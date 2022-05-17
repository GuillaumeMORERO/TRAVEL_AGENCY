<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;
    protected $table = 'etapes';

    protected $fillable = [
        'voyage_id','type','transport_number','departure','arrival','seat','gate','baggage_drop','departure_date','arrival_date', 'order'
    ];

    public function voyage() {
        return $this->belongsTo(Voyage::class);
    }

}
