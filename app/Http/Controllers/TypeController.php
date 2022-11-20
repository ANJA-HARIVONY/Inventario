<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $types = Type::all();
        return view('content.types.types', ['types'=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *type  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('content.types.types-create');
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
        $validator = $request->validate([
            'nombre' => 'required',
          ]);
          $type = new Type();
          $type->name = $request->nombre;
          $type->description = $request->descripcion;
          $type->save();
          return redirect()->route('types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($type_id)
    {
        //
        $type = Type::find($type_id);
         return view('content.types.types-edit', ['type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $type = Type::find($request->type_id);
        $type->name = $request->name;
        $type->description = $request->description;
        $type->save();
        return redirect()->route('types');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($type_id)
    {
        //
        $type = Type::find($type_id);
        $type->delete();
        return redirect()->route('types');

    }
}
