<?php

namespace App\Http\Controllers;

use App\Garbage;
use App\Tenant;
use Illuminate\Http\Request;

class GarbageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $data = [];
        $data['weight'] = null;
        $data['date'] = date('Y-m-d', strtotime(now()));
        $data['tenants'] = Tenant::all();
        $data['edit'] = 0;
        return view('garbage/form', $data);
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
        $data = [];
        $data['garbage'] = Garbage::find($id);
        return view('garbage/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['id'] = $id;
        $garbage_data = Garbage::find($id);
        $data['weight'] = $garbage_data->weight;
        $data['date'] = $garbage_data->date;
        $data['tenants'] = null;
        $data['edit'] = 1;
        return view('garbage/form', $data);
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
        $this->validate($request, [
            'weight' => 'bail | numeric | required',
            'date' => 'bail | date | required',
            'tenant' => 'bail | required',
        ]);

        $garbage_data = Garbage::find($id);
        $garbage_data->weight = $request->input('weight');
        $garbage_data->date = $request->input('date');
        $garbage_data->tenant_id = $request->input('tenant');

        $garbage_data->save();
        return redirect()->route('garbage.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $garbage = Garbage::find($id);
        $tenant_id = $garbage->tenant_id;
        $garbage->delete();
        return redirect()->route('tenant.show',$tenant_id);
    }
}
