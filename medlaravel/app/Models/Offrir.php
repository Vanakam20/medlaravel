<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offrir extends Model
{
    use HasFactory;
    protected $fillable = [
        'rapport_id',
        'medicament_id',
        'quantite'
    ];
    public function medicament()
    {
        return $this->belongsTo(Medicament::class, 'Medicament_id');
    }
}
