<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
      
    // $sql = "SELECT * FROM users";
    $search = $request->input('search');

    $usuarios = User::when($search, function ($query, $search) {
        return $query->where('name', 'like', "%{$search}%")
                     ->orWhere('email', 'like', "%{$search}%");
    })->paginate(10); // Puedes ajustar la cantidad por página
        return view('admin.usuarios.index', compact('usuarios', 'search'));
    }

    public function create()
    {
        return view('admin.usuarios.create');
    }

    public function store(Request $request)
    {
        //   $datos = $request->all();

        //   return response()->json([
            //   'success' => true,
            //   'message' => 'Usuario creado correctamente',
            //   'data' => $datos
        //   ]);

         $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|max:255|confirmed',
        ]);
        
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();
        return redirect()->route('admin.usuarios.index')
        ->with('mensaje', 'Usuario creado correctamente')
        ->with('icono', 'sucess')
        ->with('mensaje', 'Error al crear usuario')->with('icono', 'error');
    }
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.show', compact('usuario'));
    }

}
