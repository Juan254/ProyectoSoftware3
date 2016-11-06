<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\material_provider;

use App\person;

use App\activity;

use Laracast\Flash\FlashServiceProvider;

class ActivityController extends Controller
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
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->social_number == '') {
            echo "<script> alert('Debe seleccionar un indicador al cual pertenecerá la actividad.')</script>";
            return view('admin.activity.create');
        }else{
            $activity = new activity($request->all());
            $activity->social_number= ''.$request->social_number;
            $activity->save();
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $social_number)
    {
        //
        $activity = activity::find($id);
        $activity->delete();
        flash('Se ha eliminado la actividad del indicador de forma exitosa', 'danger');
        return redirect()->route('socialIndicator.more', $social_number);
    }

}
