<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $profiles = Profile::all();
       return view('profile.index', ['profiles' => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->input();
        $profile = new Profile();
        $profile->name = $arr['name'];
        $profile->money = $arr['money'];
        $profile->type = $arr['type'];
        $profile->usuario_id = $arr['usuario_id'];
        $profile->save();
        return redirect()->route('profiles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profiles = Profile::find($id);
        return view('profile.put', ['profile' => $profiles]);
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
        $arr = $request->input();
        $profile = Profile::find($id);
        $profile->name = $arr['name'];
        $profile->money = $arr['money'];
        $profile->type = $arr['type'];
        $profile->usuario_id = $arr['usuario_id'];
        $profile->save();
        
        return redirect()->route('profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profiles.index');
    }
}
