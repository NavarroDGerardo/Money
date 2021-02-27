<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movement;
use App\Category;
use App\Profile;
use App\User;

class MovementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = Movement::join('users', 'users.id', '=', 'movements.user_id')
                            ->join('profiles', 'profiles.id', '=', 'movements.profile_id')
                            ->join('categories', 'categories.id', '=', 'movements.category_id')
                            ->get(['movements.id as id', 'users.name as user_name',
                            'profiles.name as profile_name', 'categories.name as category_name',
                            'movements.amount as amount']);

        return view('movements.index', ['movements' => $movements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $profiles = Profile::all();
        $categories = Category::all();
        return view('movements.create', ['users' => $users, 'profiles' => $profiles, 'categories' => $categories]);
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
        $movement = new Movement();

        $movement->amount = $arr['amount'];
        $movement->user_id = $arr['user_id'];
        $movement->profile_id = $arr['profile_id'];
        $movement->category_id = $arr['category_id'];
        $movement->save();

        return redirect()->route('movements.index');
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
        $movements = Movement::join('users', 'users.id', '=', 'movements.user_id')
                            ->join('profiles', 'profiles.id', '=', 'movements.profile_id')
                            ->join('categories', 'categories.id', '=', 'movements.category_id')
                            ->where('movements.id', $id)
                            ->get(['movements.id as id', 'users.name as user_name',
                            'profiles.name as profile_name', 'categories.name as category_name',
                            'movements.amount as amount']);
        $movement = $movements[0];
        $users = User::all();
        $profiles = Profile::all();
        $categories = Category::all();

        return view('movements.edit', ['users' => $users, 'profiles' => $profiles,
                    'movement' => $movement, 'categories' => $categories]);
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
        $movement = Movement::find($id);

        $movement->amount = $arr['amount'];
        $movement->user_id = $arr['user_id'];
        $movement->profile_id = $arr['profile_id'];
        $movement->category_id = $arr['category_id'];
        $movement->save();

        return redirect()->route('movements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movement = Movement::find($id);
        $movement->delete();

        return redirect()->route('movements.index');
    }
}
