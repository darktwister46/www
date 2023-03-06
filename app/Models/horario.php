<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fecha',
        'hora',
        'estado'
    ];

    public function reserva (){
        return $this->belongsTo(Reserva::class, 'id');
    }

public static function recogerFechas(){
    return horario::all();
}

}
