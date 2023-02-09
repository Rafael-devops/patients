<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_patient',
        'name_mother',
        'date_birth',
        'cpf',
        'cns',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'cep',
        'image',
    ];
}
