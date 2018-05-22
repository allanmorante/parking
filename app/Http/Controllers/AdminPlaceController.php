<?php

namespace App\Http\Controllers;

use App\place;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class AdminPlaceController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('checkadmin');
    }*/

    public function index()
    {
        $places = place::all();
        return view('admin/places/index')->with('places', $places);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/places/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new place;

        $a->numPlace = $request->input('numPlace');

        $a->save();

        return redirect('admin/places');
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
        $place = place::all()->where('idPlace', $id)->first();
        return view('admin/places/edit')->with('place', $place);
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
            'numPlace' => 'required|string|unique:place',
        ]);

        $user = place::all()->where('id', $id)->first();

        $user->update(
            [
                'numPlace' => $request->numPlace,
            ]
        );

        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = place::all()->where('idPlace', $id)->first();
        if($place)
            $place->delete();
            return view('admin.place', compact('places'));
    }
}
