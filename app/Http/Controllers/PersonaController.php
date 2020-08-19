<?php

namespace App\Http\Controllers;

use App\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = persona::Get();
        echo json_encode($persona);
    }

    public function store(Request $request)
    {
        $persona = new persona();
        $persona -> nombres = $request->input('nombres');
        $persona -> apellidos = $request->input('apellidos');
        $persona -> email = $request->input('email');
        $persona -> telefono = $request->input('telefono');
        $persona -> direccion = $request->input('direccion');
        $persona -> save();
        echo json_encode($persona);
    }

    public function update(Request $request, $persona)
    {
        $persona = persona::find($persona);
        $persona -> nombres = $request->input('nombres');
        $persona -> apellidos = $request->input('apellidos');
        $persona -> email = $request->input('email');
        $persona -> telefono = $request->input('telefono');
        $persona -> direccion = $request->input('direccion');
        $persona -> save();
        echo json_encode($persona);
    }

    public function destroy($persona)
    {
        $persona = persona::find($persona);
        $persona->delete();
    }
}
