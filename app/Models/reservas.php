<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_cliente',
        'id_invitado',
        'id_menu',
        'id_mesa',
        'num_tarjeta',
        'fecha_reserva',
        'num_personas'
    ];

    public static function recogerReservas(){
        return reservas::where('id_cliente', Auth::user()->id)->get();
    }


    public static function eliminarReservas($id)
    {
        $mensaje = reservas::findOrFail($id);
        $mensaje->delete();
        horario::where('id', $id)->update(['estado' => "disponible"]);
    }


    public function cliente(){
        return$this->belongsTo(User::class,'id_cliente');
    }
    public function menus(){
        return $this->belongsTo(Menus::class,'id_menu');
    }
    public function horario (){
        return $this->belongsTo(Horario::class, 'fecha_reserva');
    }
    public function mesas_cliente(){
        return $this->belongsTo(Mesas::class,'id_mesa');
    }
    public function invitados(){
        return $this->belongsTo(Invitados::class,'id_invitado');
    }

}
?>
