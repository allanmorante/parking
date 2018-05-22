<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return view('admin/users/index')->with('users', $users);
    }

    public function indexNotValid()
    {

        $users = User::all()->where('isValid', '=', 0);
        return view('admin/users/indexNotValid')->with('users', $users);
    }

    /**
     * Afficher la file d'attente
     */

    public function indexRang()
    {
        $users = User::all()->where('rang', '!=', null);

        return view('admin/users/indexRang')->with('users', $users);
    }

    /***
     * valider un user non valide
     */
    public function valider(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->isValid = $request->update(1);

        $user->save();


        redirect(route('indexNotValid'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::all()->where('id', $id)->first();
        return view('admin/users/edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'telephone' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'rang' => 'numeric|unique:users',

        ]);

        $user = User::all()->where('idPlace', $id)->first();

        $user->update(
            [
                'email' => $request->email,
                'telephone' => $request->telephone,
                'password' => Hash::make($request->password),
                'rang' => $request->rang,
                ]
            );

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
