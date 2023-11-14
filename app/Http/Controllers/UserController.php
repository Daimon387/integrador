<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(10); // Pagina los resultados, mostrando 10 usuarios por página
    
        return view('user.index', compact('users'));
    }
    public function destroy($id)
    {
        // Llama al procedimiento almacenado
        DB::select('CALL sp_DeleteUserById(?)', [$id]);

        // O puedes usar el método statement para ejecutar procedimientos almacenados
        // DB::statement('CALL sp_DeleteUserById(?)', [$id]);

        // Redirige a la página de índice o a cualquier otra según tus necesidades
        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
