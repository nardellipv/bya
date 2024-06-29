<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function listUser()
    {
        $users = User::get();

        return view('admin.users.index', compact('users'));
    }

    public function addUser()
    {
        return view('admin.users.add');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // Confirma que password_confirmation coincida
        ]);

        if($request['role'] == 'on'){
            $userRole = 'admin';
        }else{
            $userRole = 'user';
        }

        // Creación de un nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $userRole,  // Asegúrate de tener $userRole definido previamente
        ]);


        toast('Usuario agregado correctamente', 'success');
        return redirect()->route('list.user');
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);

        // Asignar los campos comunes
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->has('role') ? 'admin' : 'user';

        // Verificar si se proporcionó una nueva contraseña
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Guardar el usuario
        $user->save();

        toast('Usuario actualizado correctamente', 'success');
        return redirect()->route('list.user');

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        toast('Usuario eliminado correctamente', 'success');
        return redirect()->route('list.user');
    }
}
