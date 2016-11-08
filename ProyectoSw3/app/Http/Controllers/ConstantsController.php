<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\constant;

use App\material_provider;

use Laracast\Flash\FlashServiceProvider;

use App\Http\Requests;

class ConstantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constant = constant::orderBy('created_at', 'desc')->first();
        if ($constant == null) {
            return redirect()->route('constant.create');
        }else{
            return view('admin.constants.index')->with('constant', $constant);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.constants.create');
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
        $constant = new constant($request->all());
        $constant->save();
        flash('Se ha registrado los precios', 'success');
        return redirect()->route('constant.index');
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
        $constant = constant::find($id);
        return view('admin.constants.edit')->with('constant', $constant);
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
        $constant = constant::find($id);
        $constant->pet = $request->pet;
        $constant->board = $request->board;
        $constant->archive = $request->archive;
        $constant->blow = $request->blow;
        $constant->junk = $request->junk;
        $constant->glass = $request->glass;
        $constant->metal = $request->metal;
        $constant->plega = $request->plega;
        $constant->frame = $request->frame;

        $constant->save();
        flash('Se han actualizado los precios exitosamente.','warning');
        return redirect()->route('constant.index');
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
