<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\person;

class PersonsController extends Controller
{
    $recuperator='Recuperador';

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
        //
        return view('admin.persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->profesion == $recuperator && ( $request->social_number != 'Caracterizado' ||
             $request->social_number != 'Asociado' ||  $request->social_number != 'Capacitado en asociatividad' 
             || $request->social_number != 'Capacitado en empresarialidad')) 
        {
            echo "<script> alert('Ha ocurrido un error, verifique el estado y/o el oficio de la persona.')</script>";
            return view('admin.persons.create');
        } else {
            $oficio= "".$request->profesion." ".$request->social_number;
            $person= new person($request->all());
            $person->social_number = $oficio;
            $person->save();
            return redirect()->route('socialIndicator.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $social_number)
    {
        $person = person::find($id);
        $person->delete();
        flash('Se ha eliminado la persona del indicador de forma exitosa', 'danger');
        return redirect()->route('socialIndicator.more', $social_number);
    }
}
