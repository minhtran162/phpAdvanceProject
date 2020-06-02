<?php

namespace App\Http\Controllers;

use App\Http\Requests\NationRequest;
use App\Models\Nation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nations = Nation::all();
        return view('admin.nation.index', ['nationsData' => $nations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return route('nations.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NationRequest $request)
    {
        $nation = Nation::create($request->all());
        if($nation) {
            return redirect('admin/nation');
        }
        return redirect()->route('nations.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //     $nation = \App\Models\Nation::find($id);
    //     return view('nations.show', array('nation' => $nation));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return route('nation.update', $id);
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
        $edit = Nation::find($id);
        $edit->update($request->all());
        if ($edit) {
            return redirect()->route('nations.index');
        }
        return redirect()->route('nations.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nation::findOrFail($id)->delete();
        return redirect('admin/nations');
    }
}
