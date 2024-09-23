<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $fillable = [
        'visiteur_id',
        'medecin_id',
        'motif',
        'bilan',
    ];
    public function patient()
    {
        return $this->belongsTo(User::class, 'visiteur_id');
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'medecin_id');
    }
    public function offrir()
    {
        return $this->hasMany(Offrir::class, 'Rapport_id');
    }
}
