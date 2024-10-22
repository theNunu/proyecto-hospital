<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User; //importadoooooo
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //importadoooooo
use Illuminate\Support\Facades\Auth; //importadoooooo

class UserController extends Controller
{
    public function index(Request $request) //estaba antes del create,update,delete
    {
        $search = $request->input('search');
        $adminId = Auth::id(); // Obtener el ID del administrador actual

        $users = User::query()
            ->where('id', '!=', $adminId) // Excluir al administrador actual
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%");
            })
            ->paginate(5);

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user) //estaba antes del create,update,delete
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado con éxito.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        // return redirect('admin.users.index')->with('alert', [
        //     'message'=>  'el usuario has sido elmininado', 
        //     'type' => 'danger',]);
        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
