<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller {
    /* Validate login */
    public function login(Request $request) {
        $usuario = Usuarios::where('email', $request->email)->first();
        $pass = Usuarios::where('password', $request->password)->first();
        if ($usuario && $pass) {
            return response()->json($usuario, 200);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }

    /* New Usuario */
    public function newUsuario(Request $rquest) {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios',
                'password' => 'required|string|min:8|confirmed',
            ]);
            $usuario = new Usuarios();
            $usuario->nombre = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->save();
            return response()->json(['message' => 'Usuario creado con éxito'], 201);
        } catch (\Exception $e) {
            Log::error('Error al crear usuario: ' . $e->getMessage());
            return response()->json(['error' => 'Error al crear usuario'], 500);
        }
    }

    /* Get Usuario info */
    public function getUsuario(Request $request) {
        $usuario = Usuarios::where('email', $request->email)->first();
        if ($usuario) {
            return response()->json($usuario, 200);
        } else {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
    }

    /* Logout */
    public function logout(Request $request) {
        // Aquí puedes implementar la lógica de cierre de sesión si es necesario
        return response()->json(['message' => 'Sesión cerrada con éxito'], 200);
    }
}   

?>