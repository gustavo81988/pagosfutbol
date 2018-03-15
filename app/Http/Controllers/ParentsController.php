<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Player;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parents.create');
    }

    public function parentAssignment($ci)
    {
        $player = Player::find($ci);
        return view('parents.create',compact('player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'     => 'required|min:2|max:50',
            'lastname' => 'required|min:2|max:50',
            'ci'       => 'required|integer|unique:parents,ci',
            'phone'    => 'required|numeric',
            'email'    => 'required|email',
        ]);
        
        $parent = new Parents;
        
        $parent->name     = $request->name;
        $parent->lastname = $request->lastname;
        $parent->ci       = $request->ci;
        $parent->phone    = $request->phone;
        $parent->email    = $request->email;
        $parent->save();
        
        return redirect('/parents/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $parents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parents $parents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parents)
    {
        //
    }
}
