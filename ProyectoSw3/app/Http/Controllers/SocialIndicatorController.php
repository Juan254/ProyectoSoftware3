<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\material_provider;

use App\person;

use App\activity;

use Illuminate\Support\Facades\DB;

use Laracast\Flash\FlashServiceProvider;

class SocialIndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = person::all();
        $social = array('social1' => $personas->where('social_number', 'Recuperador Caracterizado' )->count() ,
                        'social2' => $personas->where('social_number', 'Recuperador Asociado' )->count(),
                        'social3' => $personas->where('social_number', 'Reciclador Caracterizado' )->count(),
                        'social4' => $personas->where('social_number', 'Reciclador Asociado' )->count(),
                        'social5' => $personas->where('social_number', 'Reciclador en tratamiento psicológico' )->count(),
                        'social6' => $personas->where('social_number', 'Reciclador en tratamiento médico' )->count(),
                        'social7' => $personas->where('social_number', 'Reciclador en Acompañamiento social' )->count(),
                        'social8' => $personas->where('social_number', 'Reciclador en acompañamiento de enfermería' )->count(),
                        'social9' => $personas->where('social_number', 'Reciclador con Articulación en el centro de escucha' )->count(),
                        'social10' => $personas->where('social_number', 'Reciclador Sensibilizado en inclusión social' )->count(),
                        'social11' => $personas->where('social_number', 'Reciclador En acompañamiento en su inclusión social' )->count(),
                        'social12' => $personas->where('social_number', 'Reciclador en acompañamiento con alimentación' )->count(),
                        'social13' => $personas->where('social_number', 'Reciclador en acompañamiento con alojamiento' )->count(),
                        'social14' => $personas->where('social_number', 'Reciclador Capacitado en asociatividad' )->count(),
                        'social15' => $personas->where('social_number', 'Recuperador Capacitado en asociatividad' )->count(),
                        'social16' => $personas->where('social_number', 'Reciclador Capacitado en empresarialidad' )->count(),
                        'social17' => $personas->where('social_number', 'Recuperador Capacitado en empresarialidad' )->count(),
                         );

        $social = (object) $social;
        return view('admin.socialIndicator.socialIndex')->with('social', $social);
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
    public function destroy($id)
    {
        //
    }


    public function more($social_number){
        $persons= person::where('social_number', $social_number )->paginate(5);
        $activities= activity::all()->where('social_number', $social_number);
        $social = array('social_number' => $social_number);
        $social = (object) $social;
        return view('admin.socialIndicator.seeMore')->with('persons', $persons)->with('activities', $activities)->with('social', $social);
        
    }

}
