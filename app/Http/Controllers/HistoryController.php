<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historys;
use App\Models\phase_historys;
use App\Models\Projects;
use App\Models\Sprints;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Historys = Historys::join('phase_historys', 'phase_historys.id_phase', '=', 'historys.fk_phase_id')
                ->select('historys.id', 'historys.objective', 'historys.fk_sprint_id', 'historys.fk_project_id', 'phase_historys.name')
                ->get();
        $Sprints = Sprints::orderBy('id','ASC')->paginate(2);
        

        return view('Administrador.Historys.Listar')->with('Historys', $Historys)
        ->with('Sprint', $Sprints);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Administrador.Historys.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Historys = new Historys($request->all());
        $Historys->save();
        return redirect()->route('Historys.index');
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
        $historys = Historys::find($id);
        return view('Administrador.Historys.edit')->with('historys', $historys);
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
        $Historys = Historys::find($id);
        $Historys->fill($request->all());
        $Historys->save();
        return redirect()->route('Historys.index');
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
