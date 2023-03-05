<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\horario;
use App\Models\invitado;
use App\Models\reservas;
use Illuminate\Http\Request;
use DispatchesJobs, ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ReservasController extends Controller
{
    public function store(Request $request)
    {
        $horario = horario::where("fecha", "=", $request->post('fecha'))
            ->where("hora", "LIKE", "%" . $request->post('hora') . "%")->first();

        $idh = $horario->id;
        if (!Auth::check()) {
            $this->validate($request, [
                'email' => 'required|email',
                'nombre' => 'required',
                'apellidos' => 'required',
                'telefono' => 'required|numeric|min:9|max:9',
                'num_tarjeta' => 'required|numeric|min:13|max:19',

            ]);
            invitado::create([
                'email' => $request->post('email'),
                'nombre' => $request->post('nombre'),
                'apellidos' => $request->post('apellidos'),
                'telefono' => $request->post('telefono')

            ]);

            reservas::create([
                'id_cliente' => $request->post('id_cliente'),
                'id_invitado' => Invitado::where('email', $request->post('email'))->value('id'),
                'id_menu' => $request->post('menu'),
                'id_mesa' => "1",
                'fecha_reserva' => $idh,
                'num_tarjeta' => $request->post('num_tarjeta'),
                'num_personas' => $request->post('num_personas'),
            ]);
            $horario->estado = "ocupado";
            $horario->save();
            return redirect("/reserva3");

        } else {

            reservas::create([
                'id_cliente' => Auth::user()->id,
                'id_menu' => $request->post('menu'),
                'id_mesa' => "1",
                'fecha_reserva' => $idh,
                'num_tarjeta' => $request->post('num_tarjeta'),
                'num_personas' => $request->post('num_personas'),
            ]);

            $mensaje  = reservas::recogerReservas();
            $horario->estado = "ocupado";
            $horario->save();
            return view("misreservas")->with("reservas", reservas::where("id_cliente", auth()->user()->id)->get());
        }

    }

    public function eliminarReservas($id)
    {
        $horario=reservas::select('fecha_reserva')->where('id', $id)
        ->get();
        reservas::find($id)->delete();
        $delete=horario::where('id',$horario->value('fecha_reserva'));
        $delete->update(['estado' => 'disponible']);
        return redirect("/misreservas");
    }

    public function mostrarReservasUsuario()
    {
        $reservas = reservas::where("id_cliente", auth()->user()->id)->get();

        return view("misreservas")->with(["reservas" => $reservas]);

    }

    public function mostrarevento()
    {
        $fecha = Horario::select("fecha", "id")
            ->where("estado", "disponible")
            ->groupBy("fecha", "id")
            ->get();

        $fechas = array();
        $i = 1;
        foreach ($fecha as $f) {
            $fechas[] = array(
                "id" => $f["id"],
                "title" => "Libre",
                "start" => $f["fecha"],
                "end" => $f["fecha"]
            );
        }

        return response()->json($fechas);
    }

    public function mostrarhora(Request $request)
    {
        $horario = Horario::where([
            ["fecha", "=", $request->get("fecha")],
            ["estado", "=", "disponible"]
        ])->get();


        $horas = array();

        foreach ($horario as $h) {
            $horas[] = array(
                "id" => $h["id"],
                "hora" => date("H:i", strtotime($h["hora"])),
            );
        }
        return response()->json($horas);
    }

    public function enviardatos(Request $request)
    {
        $hora = $request->get("hora");
        $fecha = $request->get("fecha");
        $menus = Menu::recogerMenus();

        return view("reserva2")->with(["hora" => $hora, "fecha" => $fecha,'menus' => $menus,]);
    }
}
?>
