<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Farmacia;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangePasswordRequest;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin|super-admin'])->except(['changePasswordForm', 'changePassword']);
    }

    public function index(Request $request)
    {
        $users = User::with('farmacia')->name($request->search_name)->dni($request->search_dni);
        if(auth()->user()->hasRole('super-admin'))
        {
            $users = $users->paginate(5);
        }
        else
        {
            $users = $users->where('farmacia_id', auth()->user()->farmacia_id)
                           ->paginate(5);
        }
        $roles = Role::all();
        $farmacias = Farmacia::all();
        return view('users.index', compact('users', 'roles', 'farmacias'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        /* $user = new User();
        $user->fill($request->all());
        $user->save(); */

        /* Para cuando los campos en el form son distintos al nombre de la columna en DB */
        /* $data = [
            'name' => $request->nombre
        ];
        $user = User::create($data); */
        
        $user = new User;
        $user->fill($request->all());
        if(auth()->user()->hasRole('super-admin'))
        {
            $user->farmacia_id = $request->user_farmacia;
        }
        elseif(auth()->user()->hasRole('admin'))
        {
            $user->farmacia_id = auth()->user()->farmacia_id;
        }
        else
        {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('users.index');
        }
        $user->password = 'CirSub*2020';
        if(!$user->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('users.index');
        }
        if (auth()->user()->hasRole('admin'))
        {
            $user->assignRole('user');
        }
        elseif (auth()->user()->hasRole('super-admin'))
        {
            $user->assignRole($request->user_role);
        }

        
        flash(__('Usuario agregado con éxito!'))->success()->important();
        return redirect()->route('users.index');
        
    }

    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->roles()->sync($request->user_role);
        
        if(!$user->save()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('users.index');
        }

        flash(__('Usuario actualizado con éxito!'))->success()->important();
        return redirect()->route('users.index');
    }

    public function delete(User $user)
    {
        return view('users.delete', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        if(!$user->delete()) {
            flash(__('Error de operación!'))->error()->important();
            return redirect()->route('users.index');
        }

        flash(__('Usuario elminiado con éxito!'))->success()->important();
        return redirect()->route('users.index');
    }

    public function changePasswordForm(Request $request, User $user)
    {
        return view('users.change_password', compact('user'));
    }

    public function changePasswordEmail()
    {
        return view('users.change_password_email');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        // $this->can('changePassword', auth()->user());
        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->password = $request->password;
        } else {
            flash(__('auth.failed'))->error()->important();
            return redirect()->back();
        }

        if(!auth()->user()->save()) {
            flash(__('Submit Error!'))->error()->important();
            return redirect()->back();
        }

        //Envia email avisando cambio de password
        /* Auth::user()->notify(new PasswordWasChangedNotification()); */
        
        flash(__('Submit Success!'))->success()->important();
        return redirect()->route('home');
    }


}
