<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\states;
use App\Models\profiles;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = states::orderBy('name','ASC')->pluck('name', 'id_state')->toArray();
        $profiles = Profiles::orderBy('name', 'ASC')->pluck('name', 'id_profile')->toArray();
        $users = User::orderBy('id_user','ASC')->paginate(10);
        
        return view('auth.users')->with('user', $users)
        ->with('states', $states)
        ->with('profiles', $profiles);
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
    public function edit($id_user)
    {
        $user = User::find($id_user);
        $states = states::orderBy('name','ASC')->pluck('name', 'id_state')->toArray();
        $profiles = Profiles::orderBy('name', 'ASC')->pluck('name', 'id_profile')->toArray();
        
        return view('auth.edit')
        ->with('users', $user)
        ->with('states', $states)
        ->with('profiles', $profiles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $user = User::find($id_user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->name_user = $request->name_user;
        $user->email = $request->email;
        $user->fk_state_id = $request->fk_state_id;
        $user->fk_profile_id = $request->fk_profile_id;
        $user->save();

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
