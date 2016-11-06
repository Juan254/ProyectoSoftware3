<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\material_provider;

use Laracast\Flash\FlashServiceProvider;

use App\constant;

class MaterialProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $material_provider = material_provider::orderBy('id', 'DESC')->paginate(5);
        return view('admin.materials_providers.index')->with('material_provider', $material_provider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $constant = constant::orderBy('created_at', 'desc')->first();
        return view('admin.materials_providers.create')->with('constant', $constant);
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
        if ($request->provider_type == '') {
            flash('Debe de ingresar un tipo de proveedor', 'warning');

        }else{
            $material_provider=new material_provider($request->all());
            $material_provider->save();
            flash('Se ha creado un registro', 'success');
            return redirect()->route('material_provider.index');
        }
            return redirect()->route('material_provider.create');
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
        $material_provider = material_provider::find($id);
        return view('admin.materials_providers.edit')->with('material_provider', $material_provider);

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
        $material_provider = material_provider::find($id);
        $material_provider->quantity = $request->quantity;
        $material_provider->municipality = $request->municipality;
        $material_provider->buy_price = $request->buy_price;
        $material_provider->date = $request->date;

        $material_provider->save();
        flash('El registro ha sido editado con éxito.','warning');
        return redirect()->route('material_provider.index');
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
        $material_provider = material_provider::find($id);
        $material_provider->delete();
        flash('Se ha eliminado el registro de forma exitosa', 'danger');
        return redirect()->route('material_provider.index');
    }
}
