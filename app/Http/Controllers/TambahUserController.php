<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TambahUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tes-dashboard', [
            'title' => 'Register',
            'active' => 'register',
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $validatedData = $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:15',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'telepon' => 'required|max:15'
            ]);

            $validatedData['password'] = bcrypt($validatedData['password']);

            User::create($validatedData);

            // $request->session()->flash('success', 'Registrasi Selesai! Silahkan Masuk');

            return redirect('/dashboard/kelola-user')->with('success', 'Penambahan User Berhasil!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    { {
            $user = User::find($id);

            $user->delete();
            return redirect('dashboard/kelola-user')->with('success', 'User telah dihapus');
        }
    }
}
