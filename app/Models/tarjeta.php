<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $table = 'tarjetas';

    protected $primaryKey = 'num_tarjeta';

    protected $fillable = [
        'id_cliente',
        'mes_caducidad',
        'aanyo_caducidad',
        'cvv'
    ];

    public function tarjeta_user(){
        return $this-> belongsTo(User::class);
    }
    
}
