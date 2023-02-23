<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phasedetail;
use App\Models\areas;
use DB;

class PhaseDetailController extends Controller
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
        $detail = new Phasedetail();
        $detail->p_id = $request->input('p_id');
        $detail->name = $request->input('name');
        $detail->detail = $request->input('detail');
        $detail->img = $request->file('img')->store('images');
        $detail->save();

        
        // ksjdfklsdfg
        return $detail;
        
        // return "Hello World";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Phasedetail::with('block_detail')->with(['areatype_detail' => function($query) {
            $query->with(['area_details' => function($item) {
                $item->select('a_id', 'Area','price','at_id', 'p_id');
            }]);
        }])->find($id);
        
        // with(['block_detail' => function($query) {
        //     $query->with()->select('b_id', 'block_name','p_id')->orderBy('b_id');
        // }])
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
}
