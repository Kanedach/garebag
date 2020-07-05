<?php

namespace App\Http\Controllers;

use App\Garbage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['garbages'] = DB::table('garbages')
            ->join('tenants', 'garbages.tenant_id', '=', 'tenants.id')
            ->select('garbages.*', 'tenants.name')
            ->orderBy('garbages.date', 'desc')
            ->get();
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $url = [];
        $url['id'] = $id;
        return view('garbage/create', $url);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'weight' => 'bail | numeric | required',
            'date' => 'bail | date | required',
            'tenant' => 'bail | required',
        ]);

        $garbage = new Garbage;
        $garbage->weight = $request->input('weight');
        $garbage->date = $request->input('date');
        $garbage->tenant_id = $request->input('tenant');
        $garbage->save();

        return redirect()->route('garbages');
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
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('garbages');
    }
}
