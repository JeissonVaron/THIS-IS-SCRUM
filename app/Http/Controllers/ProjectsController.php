<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\User;
use App\Models\User_teams;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User_teams::orderBy('id_user_team', 'ASC');
        $projects=Projects::orderBy('id','ASC')->paginate();
        return view('Administrador.Projects.ListarProjects')->with('projects', $projects);   
         
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Administrador.Projects.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $projects = new projects($request->all());
         $projects->save();
         return redirect()->route('projects.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id_project
     * @return \Illuminate\Http\Response
     */
    public function show($id_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $projects = Projects::find($id);
        return view('Administrador.Projects.edit')->with('projects', $projects); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_project)
    {
        $projects = Projects::find($id_project);
        $projects->fill($request->all());
        $projects->save();
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_project)
    {
    
    } 

}