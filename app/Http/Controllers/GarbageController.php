<?php

namespace App\Http\Controllers;

use App\Garbage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GarbageController extends Controller
{
    public function index()
    {
        $data['garbages'] = DB::table('garbages')
            ->join('tenants', 'garbages.tenant_id', '=', 'tenants.id')
            ->select('garbages.*', 'tenants.name')
            ->orderBy('garbages.date', 'desc')
            ->get();
        return view('welcome', $data);
    }

    public function create($id)
    {
        $url = [];
        $url['id'] = $id;
        return view('form/create', $url);
    }

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


}
