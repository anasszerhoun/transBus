<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    use HasFactory;
    protected $fillable = [
        'idItineraire',
        'VilleDepart',
        'VilleArrivee',
    ];
    public function voyage()
    {
        return $this->belongsTo(Voyage::class,'idItineraire');
    }
}
