<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriteriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //consulto todos los registros de la tabla proyectos
        $criterias = Criterias::all();
        //llamo la vista que se va a cargar
        return \View::make('CrearCriterias', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('CrearCriterio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data =  $request->except(['_token']);

        $rule  =  array(
                    'Valuation'     => 'required',
                    'description'      => 'required',
                    'comment'   => 'required',
                    'fk_history_id'   => 'required',
                    
                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('criterias')->withErrors($validator->messages());

            }else{

    Clientes::storeCriterias( $data );
    
    return Redirect::to('criterias')->withMessage('Se ha creado con éxito.');

            }
       

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
        $criterias = Criterias::where('id_criteria', $id)->first(); 

        return \View::make('EditarCriterias', compact('criterias'));

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
        $data =  $request->except(['_token']);

        $rule  =  array(
                    'Valuation'     => 'required',
                    'description'      => 'required',
                    'comment'   => 'required',
                    'fk_history_id'   => 'required',
                ) ;
        
        $validator = Validator::make($data,$rule);

          if ($validator->fails())
            {

    return Redirect::to('clientes')->withErrors($validator->messages());

            }else{

    Clientes::updateClient( $data );
    
    return Redirect::to('clientes')->withMessage('Se ha editado con éxito.');

            }
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
