<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
    protected $primaryKey = 'id_employe';
    protected $fillable=[
        'id_employe',
        'nom',
        'prenom',
        'email',
        'cin',
        'num',
        'lieu',
        'description',
        'photo',
        'url_facebook',
        'url_instagram',
        'type_service'
    ];
    public function Services()
    {
        return $this->belongsTo(Services::class);
    }
}
