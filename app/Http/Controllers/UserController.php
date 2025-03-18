<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all();
            
            if ($users->isEmpty()) {
                return response()->json([
                    'mensaje' => 'No hay usuarios registrados',
                    'usuarios' => []
                ], 200);
            }

            return response()->json([
                'mensaje' => 'Usuarios recuperados exitosamente',
                'usuarios' => $users
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error al recuperar usuarios',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'mensaje' => 'Usuario encontrado exitosamente',
            'usuario' => $user
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'role' => 'required|in:cliente,vendedor',
                'address' => 'nullable|string'
            ]);
    
            $validated['password'] = Hash::make($validated['password']);
            $user = User::create($validated);
    
            return response()->json([
                'mensaje' => 'Usuario creado exitosamente',
                'usuario' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role,
                    'address' => $user->address
                ]
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al crear usuario',
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            
            $validated = $request->validate([
                'name' => 'string|max:255',
                'email' => 'email|unique:users,email,'.$id,
                'address' => 'nullable|string',
                'password' => 'nullable|min:6'
            ]);

            if (isset($validated['password'])) {
                $validated['password'] = Hash::make($validated['password']);
            }

            $user->update($validated);

            return response()->json([
                'mensaje' => 'Usuario actualizado exitosamente',
                'usuario' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role,
                    'address' => $user->address
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al actualizar usuario',
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return response()->json([
            'mensaje' => 'Usuario eliminado exitosamente'
        ]);
    }
}
