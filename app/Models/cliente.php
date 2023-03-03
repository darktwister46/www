<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'invitados';

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'nombre',
        'apellidos',
        'telefono'
    ];
}
